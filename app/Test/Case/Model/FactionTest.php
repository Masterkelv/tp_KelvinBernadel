<?php
App::uses('Faction', 'Model');

/**
 * Faction Test Case
 *
 */
class FactionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.faction',
		'app.members',
		'app.member',
		'app.factions_member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Faction = ClassRegistry::init('Faction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Faction);

		parent::tearDown();
	}

}
