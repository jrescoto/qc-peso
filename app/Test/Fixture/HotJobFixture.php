<?php
/**
 * HotJobFixture
 *
 */
class HotJobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'hot_job_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'job_tag_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'hot_job_id', 'unique' => 1), 'fk_hot_jobs_job_tags1' => array('column' => 'job_tag_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'hot_job_id' => 1,
			'job_tag_id' => 1,
			'created' => '2012-05-20 06:49:22',
			'modified' => '2012-05-20 06:49:22'
		),
	);
}
