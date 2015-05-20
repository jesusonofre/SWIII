<?php
App::uses('Evaluacion', 'Model');

/**
 * Evaluacion Test Case
 *
 */
class EvaluacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.hoja',
		'app.educacion',
		'app.grupoinfe',
		'app.evaluador',
		'app.proentidad',
		'app.entidad',
		'app.proentrega',
		'app.proinvestigador',
		'app.publicacion',
		'app.revision',
		'app.concepto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evaluacion = ClassRegistry::init('Evaluacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluacion);

		parent::tearDown();
	}

}
