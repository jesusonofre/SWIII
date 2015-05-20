<?php
App::uses('Grupolinea', 'Model');

/**
 * Grupolinea Test Case
 *
 */
class GrupolineaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupolinea',
		'app.linea',
		'app.grupo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grupolinea = ClassRegistry::init('Grupolinea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupolinea);

		parent::tearDown();
	}

}
