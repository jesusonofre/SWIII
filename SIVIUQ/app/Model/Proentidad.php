<?php
App::uses('AppModel', 'Model');
/**
 * Proentidad Model
 *
 * @property Proyecto $Proyecto
 * @property Entidad $Entidad
 */
class Proentidad extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'aporte' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Proyecto' => array(
			'className' => 'Proyecto',
			'foreignKey' => 'proyecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Entidad' => array(
			'className' => 'Entidad',
			'foreignKey' => 'entidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
