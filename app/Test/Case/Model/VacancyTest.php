<?php
App::uses('Vacancy', 'Model');

/**
 * Vacancy Test Case
 *
 */
class VacancyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.vacancy', 'app.job_post', 'app.job_tag', 'app.hot_job', 'app.business', 'app.user', 'app.role', 'app.applicant', 'app.applicant_education', 'app.applicant_work_experience', 'app.application', 'app.industry', 'app.business_branch');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vacancy = ClassRegistry::init('Vacancy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vacancy);

		parent::tearDown();
	}

}
