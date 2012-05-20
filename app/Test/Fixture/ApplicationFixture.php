<?php
/**
 * ApplicationFixture
 *
 */
class ApplicationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'application_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'applicant_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'job_post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('application_id', 'applicant_id'), 'unique' => 1), 'fk_applications_applicants1' => array('column' => 'applicant_id', 'unique' => 0), 'fk_applications_job_posts1' => array('column' => 'job_post_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'application_id' => 1,
			'applicant_id' => 1,
			'job_post_id' => 1,
			'created' => '2012-05-20 06:37:31',
			'modified' => '2012-05-20 06:37:31'
		),
	);
}
