<?php
App::uses('Proentidad', 'Model');

/**
 * Proentidad Test Case
 *
 */
class ProentidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proentidad',
		'app.proyecto',
		'app.entidad',
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
		$this->Proentidad = ClassRegistry::init('Proentidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proentidad);

		parent::tearDown();
	}

}
