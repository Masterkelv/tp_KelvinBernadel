<?php
App::uses('Ressource', 'Model');

/**
 * Ressource Test Case
 *
 */
class RessourceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ressource',
		'app.members'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ressource = ClassRegistry::init('Ressource');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ressource);

		parent::tearDown();
	}

}
