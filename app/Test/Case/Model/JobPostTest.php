<?php
App::uses('JobPost', 'Model');

/**
 * JobPost Test Case
 *
 */
class JobPostTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.job_post', 'app.job_tag', 'app.hot_job', 'app.business', 'app.user', 'app.role', 'app.applicant', 'app.applicant_education', 'app.applicant_work_experience', 'app.application', 'app.industry', 'app.business_branch', 'app.vacancy');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobPost = ClassRegistry::init('JobPost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobPost);

		parent::tearDown();
	}

}
