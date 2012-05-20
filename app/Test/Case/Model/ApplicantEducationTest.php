<?php
App::uses('ApplicantEducation', 'Model');

/**
 * ApplicantEducation Test Case
 *
 */
class ApplicantEducationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.applicant_education', 'app.applicant', 'app.user', 'app.role', 'app.business', 'app.industry', 'app.business_branch', 'app.job_post', 'app.applicant_work_experience', 'app.application');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ApplicantEducation = ClassRegistry::init('ApplicantEducation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ApplicantEducation);

		parent::tearDown();
	}

}
