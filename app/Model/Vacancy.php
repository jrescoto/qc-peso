<?php
App::uses('AppModel', 'Model');
/**
 * Vacancy Model
 *
 * @property JobPost $JobPost
 */
class Vacancy extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'vacancy_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'vacancy_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_post_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'priority' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'JobPost' => array(
			'className' => 'JobPost',
			'foreignKey' => 'job_post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
