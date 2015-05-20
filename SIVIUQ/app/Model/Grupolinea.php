<?php
App::uses('AppModel', 'Model');
/**
 * Grupolinea Model
 *
 * @property Linea $Linea
 * @property Grupo $Grupo
 */
class Grupolinea extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Linea' => array(
			'className' => 'Linea',
			'foreignKey' => 'linea_id',
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
