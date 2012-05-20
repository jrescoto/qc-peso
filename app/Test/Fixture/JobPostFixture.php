<?php
/**
 * JobPostFixture
 *
 */
class JobPostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'job_post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'type must government or private'),
		'job_tag_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'business_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'preferred_height' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '4,1'),
		'preferred_gender' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'min_age' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'max_age' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'year_of_experience' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'education_attainment' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'course' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('job_post_id', 'job_tag_id', 'business_id'), 'unique' => 1), 'fk_job_posts_businesses1' => array('column' => 'business_id', 'unique' => 0), 'fk_job_posts_job_tags1' => array('column' => 'job_tag_id', 'unique' => 0), 'fk_job_posts_business_branches1' => array('column' => 'location', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'job_post_id' => 1,
			'job_tag_id' => 1,
			'business_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'location' => 1,
			'preferred_height' => 1,
			'preferred_gender' => 1,
			'min_age' => 1,
			'max_age' => 1,
			'year_of_experience' => 1,
			'education_attainment' => 1,
			'course' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-05-20 06:48:38',
			'modified' => '2012-05-20 06:48:38'
		),
	);
}
