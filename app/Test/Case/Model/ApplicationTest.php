<?php
App::uses('Application', 'Model');

/**
 * Application Test Case
 *
 */
class ApplicationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.application', 'app.applicant', 'app.user', 'app.role', 'app.business', 'app.industry', 'app.business_branch', 'app.job_post', 'app.applicant_education', 'app.applicant_work_experience');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Application = ClassRegistry::init('Application');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Application);

		parent::tearDown();
	}

}
