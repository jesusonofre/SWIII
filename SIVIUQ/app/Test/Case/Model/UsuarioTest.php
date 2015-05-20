<?php
App::uses('Usuario', 'Model');

/**
 * Usuario Test Case
 *
 */
class UsuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usuario',
		'app.hoja',
		'app.educacion',
		'app.investigador',
		'app.programa',
		'app.facultad',
		'app.grupo',
		'app.grupoinfe',
		'app.grupolinea',
		'app.linea',
		'app.proyecto',
		'app.estado',
		'app.evaluador',
		'app.evaluacion',
		'app.revision',
		'app.concepto',
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
		$this->Usuario = ClassRegistry::init('Usuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usuario);

		parent::tearDown();
	}

}
