<?php
App::uses('Evaluador', 'Model');

/**
 * Evaluador Test Case
 *
 */
class EvaluadorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluador',
		'app.evaluacion',
		'app.proyecto',
		'app.estado',
		'app.linea',
		'app.grupolinea',
		'app.grupo',
		'app.programa',
		'app.facultad',
		'app.investigador',
		'app.usuario',
		'app.grupoinfe',
		'app.proentidad',
		'app.entidad',
		'app.proentrega',
		'app.proinvestigador',
		'app.publicacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evaluador = ClassRegistry::init('Evaluador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluador);

		parent::tearDown();
	}

}
