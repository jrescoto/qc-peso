<?php
/**
 * VacancyFixture
 *
 */
class VacancyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'vacancy_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'job_post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'priority' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'vacancy_id', 'unique' => 1), 'fk_vacancies_job_posts1' => array('column' => 'job_post_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'vacancy_id' => 1,
			'job_post_id' => 1,
			'priority' => 1,
			'created' => 'Lorem ipsum dolor sit amet',
			'modified' => 'Lorem ipsum dolor sit amet'
		),
	);
}
