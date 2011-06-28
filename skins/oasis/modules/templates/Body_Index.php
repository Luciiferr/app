<h1>Wikia</h1>
<div class="skiplinkcontainer">
<a class="skiplink" rel="nofollow" href="#WikiaArticle"><?= wfMsg( 'oasis-skip-to-content' ); ?></a>
<a class="skiplink wikinav" rel="nofollow" href="#WikiHeader"><?= wfMsg( 'oasis-skip-to-wiki-navigation' ); ?></a>
<a class="skiplink sitenav" rel="nofollow" href="#GlobalNavigation"><?= wfMsg( 'oasis-skip-to-site-navigation' ); ?></a>
</div>
<?= $afterBodyHtml ?>

<div id="ad-skin" class="wikia-ad noprint"></div>
<?= wfRenderModule('Ad', 'Index', array('slotname' => 'INVISIBLE_TOP')) ?>
<?= wfRenderModule('Ad', 'Index', array('slotname' => 'HOME_INVISIBLE_TOP')) ?>
<?= wfRenderModule('GlobalHeader') ?>

<section id="WikiaPage" class="WikiaPage">


	<?= wfRenderModule('Notifications', 'Confirmation') ?>

	<?
	if ($isMainPage) {
		echo '<div class="WikiaMainPageBanner">';
	}
	if ($wgEnableCorporatePageExt) {
		echo wfRenderModule('Ad', 'Index', array('slotname' => 'CORP_TOP_LEADERBOARD'));
	} else {
		if (in_array('leaderboard', $wgABTests)) {
			// no leaderboard ads
		} else {
			echo wfRenderModule('Ad', 'Index', array('slotname' => 'TOP_LEADERBOARD'));
			echo wfRenderModule('Ad', 'Index', array('slotname' => 'HOME_TOP_LEADERBOARD'));
		}
	}
	if ($isMainPage) {
		echo '</div>';
	}
	?>
	

	<?php
		if (empty($wgSuppressWikiHeader)) {
			echo wfRenderModule('WikiHeader');
		}
	?>

	<?php
		if (!empty($wgEnableWikiAnswers)) {
			echo wfRenderModule('WikiAnswers', 'QuestionBox');
		}
	?>
	<article id="WikiaMainContent" class="WikiaMainContent">
		<?php
		
			// Needs to be above page header so it can suppress page header
			if ($displayControlCenter) {
				echo wfRenderModule('ControlCenter', 'Chrome');
			}					
			
			// render UserPagesHeader or PageHeader or nothing...
			if (empty($wgSuppressPageHeader) && $headerModuleName) {
				echo wfRenderModule($headerModuleName, $headerModuleAction, $headerModuleParams);
			}
		?>
		<div id="WikiaArticle" class="WikiaArticle<?= $displayControlCenterChromedArticle ? ' ControlCenterChromedArticle' : '' ?>">
			<? if($displayControlCenterChromedArticle) { ?>
				<?= (string)F::app()->sendRequest( 'ControlCenterSpecialPage', 'chromedArticleHeader', array('headerText' => $wgTitle->getText() )) ?>
			<? } ?>
			<div class="home-top-right-ads">
			<?php 
				if (in_array('leaderboard', $wgABTests)) {
					echo wfRenderModule('Ad', 'Index', array('slotname' => 'TEST_HOME_TOP_RIGHT_BOXAD'));
				} else {
					echo wfRenderModule('Ad', 'Index', array('slotname' => 'HOME_TOP_RIGHT_BOXAD'));
				}

				echo wfRenderModule('Ad', 'Index', array('slotname' => 'HOME_TOP_RIGHT_BUTTON'));
			?>
			</div>


			<?php
			// for InfoBox-Testing
			if ($wgEnableInfoBoxTest) {
				echo wfRenderModule('ArticleInfoBox');
			}

			if ($wgEnableCorporatePageExt) {
				echo wfRenderModule('CorporateSite', 'Slider');
			} ?>

			<?= $bodytext ?>

		</div>

		<?php
		if (empty($wgSuppressArticleCategories)) {
			echo wfRenderModule('ArticleCategories');
		} ?>
		<?= wfRenderModule('ArticleInterlang') ?>
		
		<?php if (!empty($afterContentHookText)) { ?>
		<div id="WikiaArticleFooter" class="WikiaArticleFooter">
			<?= $afterContentHookText ?>
		</div>
		<?php } ?>

		<div id="WikiaArticleBottomAd" class="noprint">
			<?= wfRenderModule('Ad', 'Index', array('slotname' => 'PREFOOTER_LEFT_BOXAD')) ?>
			<?= wfRenderModule('Ad', 'Index', array('slotname' => 'PREFOOTER_RIGHT_BOXAD')) ?>
		</div>

<?php
	if ($displayComments) {
		echo wfRenderModule('ArticleComments');
	}
?>

	</article><!-- WikiaMainContent -->

<?php
	if (count($railModuleList) > 0) {
		echo wfRenderModule('Rail', 'Index', array('railModuleList' => $railModuleList));
	}
?>

	<?= empty($wgSuppressFooter) ? wfRenderModule('Footer') : '' ?>
	<?= wfRenderModule('CorporateFooter') ?>

</section><!--WikiaPage-->
