<?php
/**
 * ProyectoFixture
 *
 */
class ProyectoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'titulo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'resumen' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'objetivos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 800, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'resultados' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 800, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fechaInscripcion' => array('type' => 'date', 'null' => false, 'default' => null),
		'duracion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'lugarEjecucion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ciudad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'estado_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'prorroga' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'datos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cronograma' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'modalidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'linea_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false),
		'grupo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false),
		'presupuesto' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false),
		'evaluador_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 50, 'unsigned' => false),
		'datosNombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'titulo' => 'Lorem ipsum dolor sit amet',
			'resumen' => 'Lorem ipsum dolor sit amet',
			'objetivos' => 'Lorem ipsum dolor sit amet',
			'resultados' => 'Lorem ipsum dolor sit amet',
			'fechaInscripcion' => '2015-05-19',
			'duracion' => 1,
			'lugarEjecucion' => 'Lorem ipsum dolor sit amet',
			'ciudad' => 'Lorem ipsum dolor sit amet',
			'estado_id' => 'Lorem ipsum dolor sit amet',
			'id' => 1,
			'prorroga' => '2015-05-19 09:24:07',
			'datos' => 'Lorem ipsum dolor sit amet',
			'cronograma' => 1,
			'modalidad' => 'Lorem ipsum dolor sit amet',
			'linea_id' => 1,
			'grupo_id' => 1,
			'presupuesto' => 1,
			'evaluador_id' => 1,
			'datosNombre' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-05-19 09:24:07',
			'modified' => '2015-05-19 09:24:07'
		),
	);

}
