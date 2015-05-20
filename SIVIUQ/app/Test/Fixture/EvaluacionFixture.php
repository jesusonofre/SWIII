<?php
/**
 * EvaluacionFixture
 *
 */
class EvaluacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fechaEnvio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechaEntrega' => array('type' => 'date', 'null' => false, 'default' => null),
		'concepto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'observaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'calObjetivos' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'calTema' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'calPlanteamiento' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'calCronograma' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'calPresupuesto' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'calTotal' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechaCorreccion' => array('type' => 'date', 'null' => false, 'default' => null),
		'proyecto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'revision_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'resgitradoPor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fechaEnvio' => '2015-05-20',
			'fechaEntrega' => '2015-05-20',
			'concepto' => 'Lorem ipsum dolor sit amet',
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'calObjetivos' => 1,
			'calTema' => 1,
			'calPlanteamiento' => 1,
			'calCronograma' => 1,
			'calPresupuesto' => 1,
			'calTotal' => 1,
			'fechaCorreccion' => '2015-05-20',
			'proyecto_id' => 1,
			'revision_id' => 1,
			'created' => '2015-05-20 01:37:27',
			'resgitradoPor' => 'Lorem ipsum dolor sit amet',
			'modified' => '2015-05-20 01:37:27'
		),
	);

}
