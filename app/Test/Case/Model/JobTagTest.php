<?php
App::uses('JobTag', 'Model');

/**
 * JobTag Test Case
 *
 */
class JobTagTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.job_tag', 'app.hot_job', 'app.job_post');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobTag = ClassRegistry::init('JobTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobTag);

		parent::tearDown();
	}

}
