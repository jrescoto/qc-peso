<?php
App::uses('ApplicantWorkExperience', 'Model');

/**
 * ApplicantWorkExperience Test Case
 *
 */
class ApplicantWorkExperienceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.applicant_work_experience', 'app.applicant', 'app.user', 'app.role', 'app.business', 'app.industry', 'app.business_branch', 'app.job_post', 'app.applicant_education', 'app.application');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ApplicantWorkExperience = ClassRegistry::init('ApplicantWorkExperience');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ApplicantWorkExperience);

		parent::tearDown();
	}

}
