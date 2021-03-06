<?php
global $SpecialContactSecMap;
$SpecialContactSecMap = array();

$SpecialContactSecMap[] = array(
	'headerMsg' => 'onwiki',
	'links' => array(
		'content-issue',
		'user-conflict',
		'adoption',
		'dmca-request',
	)
);

$SpecialContactSecMap[] = array(
	'headerMsg' => 'account',
	'links' => array(
		[ 'link' => 'account-issue',  'form' => 'account-issue' ],
		[ 'link' => 'close-account',  'form '=> 'close-account', 'reqlogin' => true ],
		[ 'link' => 'rename-account', 'form' => 'rename-account', 'reqlogin' => true ],
		[ 'link' => 'blocked' ],
		[ 'link'=>'forget-account', 'form'=> 'forget-account' ],
		[ 'link' => 'data-access',    'form' => 'data-access' ],
	)
);

$SpecialContactSecMap[] = [
	'headerMsg' => 'editing',
	'links' => [
		'using-fandom',
		[ 'link' => 'feedback', 'form' => true ],
		[ 'link' => 'bug',      'form' => 'bug-report' ],
		[ 'link' => 'security', 'form' => 'security' ],
		[ 'link' => 'bad-ad',   'form' => 'bad-ad' ],
	],
];

$SpecialContactSecMap[] = array(
	'headerMsg' => 'setting',
	'links' => array(
		array('link'=>'wiki-name-change', 'form'=>true),
		'design',
		'features',
		array('link'=>'close-wiki', 'form'=>true),
	)
);

#this is special section, it has no headerMsg.
# with no headerMsg, it will not generate a section on the picker,
# but it's jump links will be authorized
$SpecialContactSecMap[] = array(
	'links' => array(
		array('link'=>'general', 'form'=>true),
	)
);
