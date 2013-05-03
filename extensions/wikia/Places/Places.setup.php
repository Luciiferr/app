<?php

/**
 * Places
 *
 * Provides <place> and <places> parser hooks and Special:Places
 *
 * @author Jakub Kurcek <jakub at wikia-inc.com>
 * @author Maciej Brencz <macbre at wikia-inc.com>
 * @copyright Copyright (C) 2011 Jakub Kurcek, Wikia Inc.
 * @copyright Copyright (C) 2011 Maciej Brencz, Wikia Inc.
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionCredits['specialpage'][] = array(
	'name' => 'Places',
	'version' => '2.0',
	'author' => array(
		'Maciej Brencz',
		'Jakub Kurcek' ),
	'descriptionmsg' => 'places-desc'
);

$app = F::app();
$dir = dirname( __FILE__ );

/**
 * classes
 */

$wgAutoloadClasses['PlacesHooks'] =  $dir . '/PlacesHooks.class.php';
$wgAutoloadClasses['PlacesParserHookHandler'] =  $dir . '/PlacesParserHookHandler.class.php';
$wgAutoloadClasses['WikiaApiPlaces'] =  $dir . '/WikiaApiPlaces.class.php';

/**
 * controllers
 */

$wgAutoloadClasses['PlacesController'] =  $dir . '/PlacesController.class.php';
$wgAutoloadClasses['PlacesCategoryController'] =  $dir . '/PlacesCategoryController.class.php';
$wgAutoloadClasses['PlacesEditorController'] =  $dir . '/PlacesEditorController.class.php';
$wgAutoloadClasses['PlacesSpecialController'] =  $dir . '/PlacesSpecialController.class.php';
$wgSpecialPages['Places'] = 'PlacesSpecialController';

/**
 * models
 */

$wgAutoloadClasses['PlacesModel'] =  $dir . '/models/PlacesModel.class.php';
$wgAutoloadClasses['PlaceModel'] =  $dir . '/models/PlaceModel.class.php';
$wgAutoloadClasses['PlaceStorage'] =  $dir . '/models/PlaceStorage.class.php';
$wgAutoloadClasses['PlaceCategory'] =  $dir . '/models/PlaceCategory.class.php';

/**
 * hooks
 */

$app->registerHook('ParserFirstCallInit', 'PlacesHooks', 'onParserFirstCallInit');
$app->registerHook('BeforePageDisplay', 'PlacesHooks', 'onBeforePageDisplay');
$app->registerHook('ArticleSaveComplete', 'PlacesHooks', 'onArticleSaveComplete');
$app->registerHook('RTEUseDefaultPlaceholder', 'PlacesHooks', 'onRTEUseDefaultPlaceholder');
$app->registerHook('OutputPageBeforeHTML', 'PlacesHooks', 'onOutputPageBeforeHTML');
$app->registerHook('PageHeaderIndexExtraButtons', 'PlacesHooks', 'onPageHeaderIndexExtraButtons');
$app->registerHook('EditPage::showEditForm:initial', 'PlacesHooks', 'onShowEditForm');

// for later
// $app->registerHook('OutputPageMakeCategoryLinks', 'PlacesHooks', 'onOutputPageMakeCategoryLinks');

/**
 * API module
 */
$wgAPIModules['places'] = 'WikiaApiPlaces';

/**
 * messages
 */
$app->registerExtensionMessageFile('Places', $dir . '/Places.i18n.php');

JSMessages::registerPackage('Places', array(
	'places-toolbar-button-*',
	'places-editor-*',
	'ok',
));

JSMessages::registerPackage('PlacesEditPageButton', array( 'places-toolbar-button-tooltip' ) );
JSMessages::registerPackage('PlacesGeoLocationModal', array( 'places-geolocation-modal-*' ) );

/*
 * user rights
 */
$wgAvailableRights[] = 'places-enable-category-geolocation';
$wgGroupPermissions['*']['places-enable-category-geolocation'] = false;
$wgGroupPermissions['sysop']['places-enable-category-geolocation'] = true;
