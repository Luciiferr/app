<?php

/**
 * @author Jakub Kurcek <jakub at wikia-inc.com>
 * @date 2011-12-06
 * @copyright Copyright (C) 2010 Jakub Kurcek, Wikia Inc.
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

/**
 * setup
 */
$wgLocalFileRepo = array(
	'class' => 'WikiaLocalRepo',
	'name' => 'local',
	'directory' => $wgUploadDirectory,
	'url' => $wgUploadBaseUrl ? $wgUploadBaseUrl . $wgUploadPath : $wgUploadPath,
	'hashLevels' => $wgHashedUploadDirectory ? 2 : 0,
	'thumbScriptUrl' => $wgThumbnailScriptPath,
	'transformVia404' => !$wgGenerateThumbnailOnParse,
	'deletedDir' => $wgFileStore['deleted']['directory'],
	'deletedHashLevels' => $wgFileStore['deleted']['hash']
);

if(empty($wgVideoHandlersVideosMigrated)) {
	define('NS_VIDEO', '400');
} else {
	define('NS_VIDEO', '400');
}


/**
 * @var WikiaApp
 */
$app = F::app();
$dir = dirname( __FILE__ );
$app->registerClass( 'VideoHandler',		$dir . '/handlers/VideoHandler.class.php' );
$app->registerClass( 'VideoHandlerHooks',	$dir . '/VideoHandlerHooks.class.php' );
$app->registerClass( 'WikiaVideoPage',		$dir . '/VideoPage.php' );
$app->registerClass( 'ThumbnailVideo',		$dir . '/ThumbnailVideo.class.php' );
$app->registerClass( 'OldWikiaLocalFile',	$dir . '/filerepo/OldWikiaLocalFile.class.php' );
$app->registerClass( 'WikiaLocalFile',		$dir . '/filerepo/WikiaLocalFile.class.php' );
$app->registerClass( 'WikiaNoArticleLocalFile',	$dir . '/filerepo/WikiaNoArticleLocalFile.class.php' );
$app->registerClass( 'WikiaLocalFileShared',	$dir . '/filerepo/WikiaLocalFileShared.class.php' );
$app->registerClass( 'WikiaLocalRepo',		$dir . '/filerepo/WikiaLocalRepo.class.php' );
$app->registerClass( 'ApiWrapper',		$dir . '/apiwrappers/ApiWrapper.class.php' );
$app->registerClass( 'PseudoApiWrapper',	$dir . '/apiwrappers/ApiWrapper.class.php' );
$app->registerClass( 'WikiaVideoApiWrapper',	$dir . '/apiwrappers/ApiWrapper.class.php' );
$app->registerClass( 'ParsedVideoData',		$dir . '/apiwrappers/ParsedVideoData.class.php' );
$app->registerClass( 'WikiaFileRevertForm',	$dir . '/filerepo/WikiaFileRevertForm.class.php');
$app->registerClass( 'VideoHandlerController',	$dir . '/VideoHandlerController.class.php' );
$app->registerClass( 'VideoHandlersUploader',	$dir . '/VideoHandlersUploader.class.php' );

$app->registerClass( 'EmptyResponseException',	$dir . '/apiwrappers/ApiWrapper.class.php' );
$app->registerClass( 'VideoNotFoundException',	$dir . '/apiwrappers/ApiWrapper.class.php' );
$app->registerClass( 'VideoQuotaExceededException',	$dir . '/apiwrappers/ApiWrapper.class.php' );
$app->registerClass( 'VideoIsPrivateException',	$dir . '/apiwrappers/ApiWrapper.class.php' );
$app->registerClass( 'UnsuportedTypeSpecifiedException', $dir . '/apiwrappers/ApiWrapper.class.php' );
$app->registerClass( 'VideoNotFound', $dir . '/apiwrappers/ApiWrapper.class.php' );

/**
 * messages
 */
$wgExtensionMessagesFiles['VideoHandlers'] = "$dir/VideoHandlers.i18n.php";

/**
 * hooks
 */
$app->registerHook( 'FileRevertFormBeforeUpload', 'VideoHandlerHooks', 'onFileRevertFormBeforeUpload' );
$app->registerHook( 'ArticleFromTitle', 'VideoHandlerHooks', 'onArticleFromTitle' );

// permissions
$wgAvailableRights[] = 'specialvideohandler';
$wgGroupPermissions['staff']['specialvideohandler'] = true;

/*
 * handlers
 */

$app->registerClass('BliptvVideoHandler', $dir . '/handlers/BliptvVideoHandler.class.php');
$app->registerClass('BliptvApiWrapper', $dir . '/apiwrappers/BliptvApiWrapper.class.php');
$wgMediaHandlers['video/bliptv'] = 'BliptvVideoHandler';

$app->registerClass('DailymotionVideoHandler', $dir . '/handlers/DailymotionVideoHandler.class.php');
$app->registerClass('DailymotionApiWrapper', $dir . '/apiwrappers/DailymotionApiWrapper.class.php');
$wgMediaHandlers['video/dailymotion'] = 'DailymotionVideoHandler';

$app->registerClass('HuluVideoHandler', $dir . '/handlers/HuluVideoHandler.class.php');
$app->registerClass('HuluApiWrapper', $dir . '/apiwrappers/HuluApiWrapper.class.php');
$wgMediaHandlers['video/hulu'] = 'HuluVideoHandler';

$app->registerClass('FiveminVideoHandler', $dir . '/handlers/FiveminVideoHandler.class.php');
$app->registerClass('FiveminApiWrapper', $dir . '/apiwrappers/FiveminApiWrapper.class.php');
$wgMediaHandlers['video/fivemin'] = 'FiveminVideoHandler';

$app->registerClass('MetacafeVideoHandler', $dir . '/handlers/MetacafeVideoHandler.class.php');
$app->registerClass('MetacafeApiWrapper', $dir . '/apiwrappers/MetacafeApiWrapper.class.php');
$wgMediaHandlers['video/metacafe'] = 'MetacafeVideoHandler';

$app->registerClass('MovieclipsVideoHandler', $dir . '/handlers/MovieclipsVideoHandler.class.php');
$app->registerClass('MovieclipsApiWrapper', $dir . '/apiwrappers/MovieclipsApiWrapper.class.php');
$wgMediaHandlers['video/movieclips'] = 'MovieclipsVideoHandler';

$app->registerClass('MyvideoVideoHandler', $dir . '/handlers/MyvideoVideoHandler.class.php');
$app->registerClass('MyvideoApiWrapper', $dir . '/apiwrappers/MyvideoApiWrapper.class.php');
$wgMediaHandlers['video/myvideo'] = 'MyvideoVideoHandler';

$app->registerClass('RealgravityVideoHandler', $dir . '/handlers/RealgravityVideoHandler.class.php');
$app->registerClass('RealgravityApiWrapper', $dir . '/apiwrappers/RealgravityApiWrapper.class.php');
$wgMediaHandlers['video/realgravity'] = 'RealgravityVideoHandler';

$app->registerClass('ScreenplayVideoHandler', $dir . '/handlers/ScreenplayVideoHandler.class.php');
$app->registerClass('ScreenplayApiWrapper', $dir . '/apiwrappers/ScreenplayApiWrapper.class.php');
$wgMediaHandlers['video/screenplay'] = 'ScreenplayVideoHandler';

$app->registerClass('VimeoVideoHandler', $dir . '/handlers/VimeoVideoHandler.class.php');
$app->registerClass('VimeoApiWrapper', $dir . '/apiwrappers/VimeoApiWrapper.class.php');
$wgMediaHandlers['video/vimeo'] = 'VimeoVideoHandler';

$app->registerClass('ViddlerVideoHandler', $dir . '/handlers/ViddlerVideoHandler.class.php');
$app->registerClass('ViddlerApiWrapper', $dir . '/apiwrappers/ViddlerApiWrapper.class.php');
$wgMediaHandlers['video/viddler'] = 'ViddlerVideoHandler';

$app->registerClass('YoutubeVideoHandler', $dir . '/handlers/YoutubeVideoHandler.class.php');
$app->registerClass('YoutubeApiWrapper', $dir . '/apiwrappers/YoutubeApiWrapper.class.php');
$wgMediaHandlers['video/youtube'] = 'YoutubeVideoHandler';

/**
 * Feed ingesters
 */
$app->registerClass('VideoFeedIngester', $dir . '/feedingesters/VideoFeedIngester.class.php');
$app->registerClass('MovieclipsFeedIngester', $dir . '/feedingesters/MovieclipsFeedIngester.class.php');
$app->registerClass('RealgravityFeedIngester', $dir . '/feedingesters/RealgravityFeedIngester.class.php');
$app->registerClass('ScreenplayFeedIngester', $dir . '/feedingesters/ScreenplayFeedIngester.class.php');

$wgVideoMigrationProviderMap = array(
	4 => 'Fivemin',
	5 => 'Youtube',
	6 => 'Hulu',
	10 => 'Bliptv',
	11 => 'Metacafe',
	12 => 'Screenplay',
	13 => 'Vimeo',
        15 => 'Myvideo',
	18 => 'Dailymotion',
        19 => 'Viddler',
	22 => 'Movieclips',
	23 => 'Realgravity',
);


/*
 * After migration
 */ 
if(!empty($wgVideoHandlersVideosMigrated)) {
	
	/**
	 * SpecialPages
	 */
	$app->registerClass( 'VideoHandlerSpecialController', $dir . '/VideoHandlerSpecialController.class.php' );
	$app->registerSpecialPage('VideoHandler', 'VideoHandlerSpecialController');
	
}