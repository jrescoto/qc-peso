<?php
App::uses('HotJob', 'Model');

/**
 * HotJob Test Case
 *
 */
class HotJobTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.hot_job', 'app.job_tag', 'app.job_post', 'app.business', 'app.user', 'app.role', 'app.applicant', 'app.applicant_education', 'app.applicant_work_experience', 'app.application', 'app.industry', 'app.business_branch', 'app.vacancy');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotJob = ClassRegistry::init('HotJob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotJob);

		parent::tearDown();
	}

}
