<?php
App::uses('Proinvestigador', 'Model');

/**
 * Proinvestigador Test Case
 *
 */
class ProinvestigadorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proinvestigador',
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
		'app.evaluacion',
		'app.revision',
		'app.concepto',
		'app.proentidad',
		'app.entidad',
		'app.proentrega',
		'app.publicacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proinvestigador = ClassRegistry::init('Proinvestigador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proinvestigador);

		parent::tearDown();
	}

}
