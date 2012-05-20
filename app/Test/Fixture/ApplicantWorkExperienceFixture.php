<?php
/**
 * ApplicantWorkExperienceFixture
 *
 */
class ApplicantWorkExperienceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'applicant_work_experience_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'applicant_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'job_tag_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'company_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'company_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_from' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'date_to' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('applicant_work_experience_id', 'applicant_id'), 'unique' => 1), 'fk_applicant_work_experiences_applicants1' => array('column' => 'applicant_id', 'unique' => 0), 'fk_applicant_work_experiences_job_tags1' => array('column' => 'job_tag_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'applicant_work_experience_id' => 1,
			'applicant_id' => 1,
			'job_tag_id' => 1,
			'company_name' => 'Lorem ipsum dolor ',
			'company_address' => 'Lorem ipsum dolor sit amet',
			'date_from' => '2012-05-20 06:36:09',
			'date_to' => '2012-05-20 06:36:09',
			'created' => '2012-05-20 06:36:09',
			'modified' => '2012-05-20 06:36:09'
		),
	);
}
