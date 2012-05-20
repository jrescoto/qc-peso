<?php
App::uses('BusinessBranch', 'Model');

/**
 * BusinessBranch Test Case
 *
 */
class BusinessBranchTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.business_branch', 'app.business', 'app.user', 'app.role', 'app.applicant', 'app.applicant_education', 'app.applicant_work_experience', 'app.application', 'app.job_post', 'app.industry');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessBranch = ClassRegistry::init('BusinessBranch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessBranch);

		parent::tearDown();
	}

}
