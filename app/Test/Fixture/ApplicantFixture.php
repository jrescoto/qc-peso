<?php
/**
 * ApplicantFixture
 *
 */
class ApplicantFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'applicant_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'middle_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_of_birth' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'place_of_birth' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address_line_1' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'telephone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gender' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'weight' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '4,1'),
		'height' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '4,1'),
		'civil_status' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'tin' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'passport_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'religion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'employment_status' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'indexes' => array('PRIMARY' => array('column' => array('applicant_id', 'user_id'), 'unique' => 1), 'fk_applicants_users1' => array('column' => 'user_id', 'unique' => 0), 'fk_applicants_municipalities1' => array('column' => 'municipality_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'applicant_id' => 1,
			'user_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'middle_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'date_of_birth' => '2012-05-20 05:59:56',
			'place_of_birth' => 'Lorem ipsum dolor sit amet',
			'address_line_1' => 'Lorem ipsum dolor sit amet',
			'municipality_id' => 1,
			'telephone' => 'Lorem ipsum dolor ',
			'email' => 'Lorem ipsum dolor sit amet',
			'gender' => 1,
			'weight' => 1,
			'height' => 1,
			'civil_status' => 1,
			'tin' => 'Lorem ipsu',
			'passport_number' => 'Lorem ipsum dolor ',
			'religion' => 'Lorem ipsum dolor sit amet',
			'employment_status' => 1
		),
	);
}
