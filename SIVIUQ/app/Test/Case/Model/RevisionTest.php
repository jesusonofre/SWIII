<?php
App::uses('Revision', 'Model');

/**
 * Revision Test Case
 *
 */
class RevisionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.revision',
		'app.concepto',
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
		'app.evaluador',
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
		$this->Revision = ClassRegistry::init('Revision');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Revision);

		parent::tearDown();
	}

}
