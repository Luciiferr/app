<?php

$app = F::app();
$dir = dirname(__FILE__) . '/';

$wgAutoloadClasses['Report'] =  $dir.'Report.class.php';

$wgAutoloadClasses['CustomReportsSpecialController'] =  $dir.'CustomReportsSpecialController.class.php';

$wgSpecialPages['CustomReports'] = 'CustomReportsSpecialController';

$app->registerExtensionMessageFile('CustomReports', $dir.'CustomReports.i18n.php');

$wgAvailableRights[] = 'customreports';

$wgGroupPermissions['*']['customreports'] = false;
$wgGroupPermissions['staff']['customreports'] = true;
