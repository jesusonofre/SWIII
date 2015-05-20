<?php
App::uses('Proyecto', 'Model');

/**
 * Proyecto Test Case
 *
 */
class ProyectoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.evaluador',
		'app.evaluacion',
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
		$this->Proyecto = ClassRegistry::init('Proyecto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proyecto);

		parent::tearDown();
	}

}
