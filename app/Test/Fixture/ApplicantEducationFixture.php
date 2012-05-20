<?php
/**
 * ApplicantEducationFixture
 *
 */
class ApplicantEducationFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'applicant_education';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'applicant_education_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'applicant_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'level' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'course' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'major' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'school' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'year_from' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'year_to' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('applicant_education_id', 'applicant_id'), 'unique' => 1), 'fk_applicant_education_applicants1' => array('column' => 'applicant_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'applicant_education_id' => 1,
			'applicant_id' => 1,
			'level' => 1,
			'course' => 'Lorem ipsum dolor sit amet',
			'major' => 'Lorem ipsum dolor sit amet',
			'school' => 'Lorem ipsum dolor sit amet',
			'year_from' => '2012-05-20 06:35:10',
			'year_to' => '2012-05-20 06:35:10',
			'created' => '2012-05-20 06:35:10',
			'modified' => '2012-05-20 06:35:10'
		),
	);
}
