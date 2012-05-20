<?php
/**
 * BusinessBranchFixture
 *
 */
class BusinessBranchFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'business_branch_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'business_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'address_line_1' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('business_branch_id', 'business_id'), 'unique' => 1), 'fk_business_branches_businesses1' => array('column' => 'business_id', 'unique' => 0), 'fk_business_branches_municipalities1' => array('column' => 'municipality_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'business_branch_id' => 1,
			'business_id' => 1,
			'address_line_1' => 'Lorem ipsum dolor sit amet',
			'municipality_id' => 1,
			'created' => '2012-05-20 06:43:12',
			'modified' => '2012-05-20 06:43:12'
		),
	);
}
