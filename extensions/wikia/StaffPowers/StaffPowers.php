<?php
/**
 * Applies staff powers to select users, like unblockableness, superhuman strenght and
 * general awesomeness.
 *
 * @author Lucas Garczewski <tor@wikia-inc.com>
 */

$wgExtensionMessagesFiles['StaffPowers'] = dirname(__FILE__) . '/StaffPowers.i18n.php';

// Power: unblockableness
$wgHooks['BlockIp'][] = 'efPowersMakeUnblockable';
$wgAvailableRights[] = 'unblockable';
$wgGroupPermissions['staff']['unblockable'] = true;
$wgGroupPermissions['helper']['unblockable'] = true;
$wgGroupPermissions['vstf']['unblockable'] = true;

function efPowersMakeUnblockable( $block, $user ) {
	$blockedUser = User::newFromName( $block->getRedactedName() );

        if (empty($blockedUser) || !$blockedUser->isAllowed( 'unblockable' ) ) {
		return true;
	}

	global $wgMessageCache;

	wfLoadExtensionMessages( 'StaffPowers' );

	// hack to get IpBlock to display the message we want -- hardcoded in core code
	$replacement = wfMsgExt( 'staffpowers-ipblock-abort', array('parseinline') );
	$wgMessageCache->addMessages( array( 'hookaborted' => $replacement ) );
	wfRunHooks('BlockIpStaffPowersCancel', array($block, $user));
	return false;
}


