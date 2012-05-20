<?php
App::uses('Municipality', 'Model');

/**
 * Municipality Test Case
 *
 */
class MunicipalityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.municipality');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Municipality = ClassRegistry::init('Municipality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Municipality);

		parent::tearDown();
	}

}
