<?php
/**
 * GrupoinfeFixture
 *
 */
class GrupoinfeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'invesigador_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'grupo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Representante' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'invesigador_id' => 1,
			'grupo_id' => 1,
			'Representante' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-05-19 07:43:18',
			'modified' => '2015-05-19 07:43:18'
		),
	);

}
