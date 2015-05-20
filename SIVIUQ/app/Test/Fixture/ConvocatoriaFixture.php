<?php
/**
 * ConvocatoriaFixture
 *
 */
class ConvocatoriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 233, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fechaInicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechaFin' => array('type' => 'date', 'null' => false, 'default' => null),
		'registradoPor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'fechaInicio' => '2015-05-19',
			'fechaFin' => '2015-05-19',
			'registradoPor' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-05-19 06:11:45',
			'modified' => '2015-05-19 06:11:45'
		),
	);

}
