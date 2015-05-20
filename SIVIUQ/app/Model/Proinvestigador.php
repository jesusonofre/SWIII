<?php
App::uses('AppModel', 'Model');
/**
 * Proinvestigador Model
 *
 * @property Proyecto $Proyecto
 * @property Investigador $Investigador
 */
class Proinvestigador extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'horasTrabajadas' => array(
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
		'Investigador' => array(
			'className' => 'Investigador',
			'foreignKey' => 'investigador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
