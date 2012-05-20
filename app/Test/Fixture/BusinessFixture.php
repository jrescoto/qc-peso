<?php
/**
 * BusinessFixture
 *
 */
class BusinessFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'business_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'business_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'acronym' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tin' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'industry_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'address_line_1' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'telephone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'website' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_person_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_person_position' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => array('business_id', 'user_id'), 'unique' => 1), 'fk_businesses_users1' => array('column' => 'user_id', 'unique' => 0), 'fk_businesses_municipalities1' => array('column' => 'municipality_id', 'unique' => 0), 'fk_businesses_industries1' => array('column' => 'industry_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'business_id' => 1,
			'user_id' => 1,
			'business_name' => 'Lorem ipsum dolor sit amet',
			'acronym' => 'Lorem ip',
			'tin' => 'Lorem ipsum dolor ',
			'type' => 1,
			'industry_id' => 1,
			'address_line_1' => 'Lorem ipsum dolor sit amet',
			'municipality_id' => 1,
			'telephone' => 'Lorem ipsum dolor ',
			'fax' => 'Lorem ipsum dolor ',
			'website' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'contact_person_name' => 'Lorem ipsum dolor sit amet',
			'contact_person_position' => 'Lorem ipsum dolor sit amet'
		),
	);
}
