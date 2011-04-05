<?php

require_once(dirname(__FILE__).'/../AssetsManager_setup.php');

class AssetsManagerTest extends PHPUnit_Framework_TestCase {

	protected function tearDown() {
		F::unsetInstance('AssetsConfig');
	}

	public function testGroupLocalURLOfNotExistingGroup() {
		$this->markTestIncomplete("Please fix this test to match current code");
		return;

		$ac = $this->getMock('AssetsConfig', array('resolve'));
		$ac->expects($this->once())
		   ->method('resolve')
		   ->with($this->equalTo('not_existing_group'), $this->anything(), $this->anything())
		   ->will($this->returnValue(array()));

		F::setInstance('AssetsConfig', $ac);

		$am = AssetsManager::getInstance();
		$res = $am->getGroupLocalURL('not_existing_group');

		$this->assertEquals(array(), $res);
	}

}