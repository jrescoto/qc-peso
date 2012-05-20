<?php
App::uses('AppModel', 'Model');
/**
 * HotJob Model
 *
 * @property JobTag $JobTag
 */
class HotJob extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'hot_job_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'hot_job_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_tag_id' => array(
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
		'JobTag' => array(
			'className' => 'JobTag',
			'foreignKey' => 'job_tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
