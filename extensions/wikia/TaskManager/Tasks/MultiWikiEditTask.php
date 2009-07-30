<?php

/**
 * @package MediaWiki
 * @subpackage BatchTask
 * @author Bartek Lapinski <bartek@wikia.com> for Wikia.com, Piotr Molski <moli@wikia-inc.com> for Wikia.com
 * @copyright (C) 2007-2009, Wikia Inc.
 * @license GNU General Public Licence 2.0 or later
 * @version: $Id$
 */


class MultiWikiEditTask extends BatchTask {
	var $mType;
	var $mVisible;
	var $mUser;

	/* constructor */
	function __construct( $params = array() ) {
        $this->mType = 'multiwikiedit';
		$this->mVisible = false; //we don't show form for this, it already exists
		$this->mParams = $params;
		parent::__construct () ;
	}

	function execute ($params = null) {
		global $IP, $wgWikiaLocalSettingsPath ;
		
		/* 
		 * go with each supplied wiki and edit the supplied article 
		 * load all configs for particular wikis before doing so
		 */

		$this->mTaskID = $params->task_id;
		$oUser = User::newFromId( $params->task_user_id );
		if ( $oUser instanceof User ) {
			$oUser->load();
			$this->mUser = $oUser->getName();
		} else {
			$this->addLog("Invalid user - id: " . $params->task_user_id );
			return true;
		}
		
		$data = unserialize($params->task_arguments);

		$article = $data["page"];
		$username = escapeshellarg($data["user"]);
		$oUser = User::newFromName( $username );
		if ( !is_object($oUser) ) {
			$username = '';
		}
		$text = escapeshellarg($data["text"]);
		$summary = escapeshellarg($data["summary"]);
		$summary_text = ($summary != '') ? " -s $summary" : "";

		$this->addLog("Starting task.");
		$this->addLog("Article text: ");
		$this->addLog($text);

		$this->addLog("Article summary: ");
		$this->addLog($summary_text);

		$options_switches = array('-m','-b','-a','--no-rc', '--newonly');
		$options_descriptions = array(
			'minor edit' ,
			'bot (hidden) edit' ,
			'enable autosummary' ,
			'do not show the change in recent changes',
			'skip existing articles'
		) ;

		$this->addLog ("Article flags used with this operation: ") ;

		/* initialize semi-global options */
		$semiglobals = '' ;
		$flags = $data["flags"] ;
		for ($j = 0; $j < count ($flags); $j++) {
			if ( $flags[$j] ) {
				$semiglobals .= " " . $options_switches[$j];
				$this->addLog(' - ' . $options_descriptions[$j]);
			}
		}

		$this->addLog("List of edited articles (by " . $this->mUser . ' as ' . $username . "):");

		$range = escapeshellarg($data["range"]);
		$selwikia = intval($data["selwikia"]);
		$wikis = $data["wikis"];
		$lang = $data["lang"];
		$cat = $data["cat"];

		$pre_wikis = array();
		if ( !empty($wikis) ) {
			$pre_wikis = explode( ",", $wikis );
		}

		$wikiList = $this->fetchWikis($pre_wikis, $lang, $cat, $selwikia);
		
		if ( !empty($wikiList) ) {
			$this->addLog("Found " . count($wikiList) . " Wikis to proceed");
			foreach ( $wikiList as $id => $oWiki ) {
				$retval = "";
				$fixedArticle = $this->checkArticle($article, $oWiki);
				if ( empty($fixedArticle) ) {
					$this->addLog("Article " . $article . " doesn't exist on {$oWiki->city_dbname} ({$oWiki->city_url}) ");
				}

				$title = $fixedArticle['title'];
				$namespace = intval($fixedArticle['namespace']);

				$sCommand = "SERVER_ID=". $oWiki->city_id ." php $IP/maintenance/wikia/editOn.php ";
				if ( !empty($username) ) {
					$sCommand .= "-u $username ";
				}
				$sCommand .= "-t ".escapeshellarg($title)." ";
				$sCommand .= "-n " . $namespace . " ";
				$sCommand .= "-x " . $text. " ";
				$sCommand .= $summary_text. " ";
				$sCommand .= $semiglobals . " ";
				$sCommand .= "--conf $wgWikiaLocalSettingsPath";

				echo "command: " . $sCommand . " \n";

				$city_url = WikiFactory::getVarValueByName( "wgServer", $oWiki->city_id );
				if ( empty($city_url) ) {
					$city_url = 'wiki id in WikiFactory: ' . $oWiki->city_id;
				}
				
				$city_path = WikiFactory::getVarValueByName( "wgScript", $oWiki->city_id );
				$actual_title = wfShellExec( $sCommand, $retval );

				//wfShellExec( $sCommand, $retval );
				if ($retval) {
					$this->addLog ('Article editing error! (' . $city_url . '). Error code returned: ' .  $retval . ' Error was: ' . $actual_title);
				} 
				else {
					$this->addLog ('<a href="' . $city_url . $city_path . '?title=' . $actual_title . '">' . $city_url . $city_path . '?title=' . $actual_title . '</a>') ;
				}
			}
		}
		return true ;
	}

	function getType() {
		return $this->mType;
	}

	function isVisible() {
		return $this->mVisible;
	}

	function getForm($title, $errors = false ) {
		return true ;
	}

	function submitForm() {
		global $wgRequest, $wgOut, $IP, $wgUser, $wgExternalSharedDB;
		
		if ( empty($this->mParams) ) {
			return false;
		}
		
		$sParams = serialize( $this->mParams );
		
		$dbw = wfGetDB( DB_MASTER, null, $wgExternalSharedDB );
		$dbw->insert( 
			"wikia_tasks", 
			array(
				"task_user_id" => $wgUser->getID(),
				"task_type" => $this->mType,
				"task_priority" => 1,
				"task_status" => 1,
				"task_added" => wfTimestampNow(),
				"task_started" => "",
				"task_finished" => "",
				"task_arguments" => $sParams
			)
		);
		$task_id = $dbw->insertId() ;
		$dbw->commit();
		return $task_id ;		
	}

	/**
	 * getDescription
	 *
	 * description of task, used in task listing.
	 *
	 * @access public
	 * @author eloy@wikia, bartek@wikia
	 *
	 * @return string: task description
	 */
	public function getDescription() {
		$desc = $this->getType();
		if( !is_null( $this->mData ) ) {
			$args = unserialize( $this->mData->task_arguments );
			$mode = $args["mode"];
			$admin = $args["admin"];
			$oUser = User::newFromName ($admin);
			if (is_object ($oUser)) {
				$oUser->load();
				$userLink = $oUser->getUserPage()->getLocalUrl();
				$userName = $oUser->getName();
			} else {
				$userLink = '';
				$userName = '';
			}

			$title = $namespace = '';
			$page = Title::newFromText($args["page"]);
			if ( !is_object($page) ) {
				$title = $args["page"];
			} else {
				$namespace = $page->getNamespace();
				$title = str_replace( ' ', '_', $page->getText() );
			}

			$desc = sprintf (
				"multiwikiedit mode: %s,<br/> article: %s, namespace %d <br/>as user: <a href=\"%s\">%s</a>",
				$mode,
				$title,
				$namespace,
				$userLink,
				$userName
			);
		}
		return $desc;
	}
	
	/**
	 * fetchWikis
	 *
	 * return number of wikis for params
	 *
	 * @access private
	 *
	 * @return integer (count of wikis)
	 */
	private function fetchWikis($wikis = array(), $lang = '', $cat = 0, $wikiaId = 0) {
		global $wgExternalSharedDB ;
		$dbr = wfGetDB (DB_SLAVE, array(), $wgExternalSharedDB);

		$where = array("city_public" => 1);	
		$count = 0;	
		if ( !empty($lang) ) {
			$where['city_lang'] = $lang;
		} 
		else if (!empty($cat)) {
			$where['cat_id'] = $cat;
		}
		
		if ( !empty($wikiaId) ) {
			$where['city_list.city_id'] = $wikiaId;
		}
		
		if ( empty($wikis) ) {
			$oRes = $dbr->select(
				array( "city_list join city_cat_mapping on city_cat_mapping.city_id = city_list.city_id" ),
				array( "city_list.city_id, city_dbname, city_url" ),
				$where,
				__METHOD__
			);
		} else {
			$where[] = "city_list.city_id = city_domains.city_id";
			$where[] = " city_domain in ('" . implode("','", $wikis) . "') ";

			$oRes = $dbr->select(
				array( "city_list", "city_domains" ),
				array( "city_list.city_id, city_dbname, city_url" ),
				$where,
				__METHOD__
			);
		}

		$wiki_array = array();
		while ($oRow = $dbr->fetchObject($oRes)) {
			array_push($wiki_array, $oRow) ;
		}
		$dbr->freeResult ($oRes) ;

		return $wiki_array;
	}
	
	/**
	 * checkArticle
	 *
	 * check articles exists on selected Wiki
	 *
	 * @access private
	 *
	 * @return array
	 */
	function checkArticle ($article, $wiki) {
		$result = array();
		$dbr = wfGetDB( DB_SLAVE, array(), $wiki->city_dbname ); 
		if ($dbr) {
			/* get only the selected namespace, nothing more */
			$page = Title::newFromText($article);
			if ( !is_object($page) ) {
				return $result;
			}
			$namespace = $page->getNamespace();
			$fixedTitle = str_replace( ' ', '_', $page->getText() );

			$oRow = $dbr->selectRow(
				array( 'page' ),
				array( 'page_namespace', 'page_title' ),
				array(
					'page_title' => $fixedTitle,
					'page_namespace' => $namespace
				),
				__METHOD__
			);

			if ( (!empty($oRow)) && (!empty($oRow->page_title)) ) { 
				$result = array(
					'title' => $oRow->page_title,
					'namespace' => $oRow->page_namespace
				);
			} else {
				$result = array(
					'title' => $fixedTitle,
					'namespace' => $namespace
				);
			}
		}
		
		return $result;
	}
	
	
}
