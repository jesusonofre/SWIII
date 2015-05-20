<?php
App::uses('Programa', 'Model');

/**
 * Programa Test Case
 *
 */
class ProgramaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.programa',
		'app.facultad',
		'app.grupo',
		'app.grupoinfe',
		'app.invesigador',
		'app.grupolinea',
		'app.linea',
		'app.proyecto',
		'app.entidad',
		'app.proentidad',
		'app.evaluacion',
		'app.evaluador',
		'app.investigador',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Programa = ClassRegistry::init('Programa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Programa);

		parent::tearDown();
	}

}
