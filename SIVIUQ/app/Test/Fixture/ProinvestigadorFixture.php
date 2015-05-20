<?php
/**
 * ProinvestigadorFixture
 *
 */
class ProinvestigadorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'proyecto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'investigador_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'horasTrabajadas' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'id' => 1,
			'proyecto_id' => 1,
			'investigador_id' => 1,
			'horasTrabajadas' => 1,
			'created' => '2015-05-20 02:05:33',
			'modified' => '2015-05-20 02:05:33'
		),
	);

}
