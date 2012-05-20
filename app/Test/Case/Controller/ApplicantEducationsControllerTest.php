<?php
App::uses('ApplicantEducationsController', 'Controller');

/**
 * TestApplicantEducationsController *
 */
class TestApplicantEducationsController extends ApplicantEducationsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * ApplicantEducationsController Test Case
 *
 */
class ApplicantEducationsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.applicant_education', 'app.applicant', 'app.user', 'app.role', 'app.business', 'app.industry', 'app.business_branch', 'app.job_post', 'app.job_tag', 'app.hot_job', 'app.application', 'app.vacancy', 'app.applicant_work_experience');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ApplicantEducations = new TestApplicantEducationsController();
		$this->ApplicantEducations->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ApplicantEducations);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
