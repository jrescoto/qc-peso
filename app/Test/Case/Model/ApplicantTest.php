<?php
App::uses('Applicant', 'Model');

/**
 * Applicant Test Case
 *
 */
class ApplicantTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.applicant', 'app.user', 'app.role', 'app.business', 'app.applicant_education', 'app.applicant_work_experience', 'app.application');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Applicant = ClassRegistry::init('Applicant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Applicant);

		parent::tearDown();
	}

}
