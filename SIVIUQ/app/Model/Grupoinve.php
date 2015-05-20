<?php
App::uses('AppModel', 'Model');
/**
 * Grupoinfe Model
 *
 * @property Invesigador $Invesigador
 * @property Grupo $Grupo
 */
class Grupoinfe extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Representante' => array(
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
		'Invesigador' => array(
			'className' => 'Invesigador',
			'foreignKey' => 'invesigador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Grupo' => array(
			'className' => 'Grupo',
			'foreignKey' => 'grupo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
