<?php
App::uses('Entidad', 'Model');

/**
 * Entidad Test Case
 *
 */
class EntidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entidad',
		'app.proyecto',
		'app.evaluacion',
		'app.evaluador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Entidad = ClassRegistry::init('Entidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entidad);

		parent::tearDown();
	}

}
