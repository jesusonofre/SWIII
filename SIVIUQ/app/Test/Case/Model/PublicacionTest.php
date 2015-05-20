<?php
App::uses('Publicacion', 'Model');

/**
 * Publicacion Test Case
 *
 */
class PublicacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.publicacion',
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
		'app.evaluacion',
		'app.evaluador',
		'app.proentidad',
		'app.entidad',
		'app.proentrega',
		'app.proinvestigador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Publicacion = ClassRegistry::init('Publicacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Publicacion);

		parent::tearDown();
	}

}
