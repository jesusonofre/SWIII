<?php
App::uses('Investigador', 'Model');

/**
 * Investigador Test Case
 *
 */
class InvestigadorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.investigador',
		'app.usuario',
		'app.programa',
		'app.facultad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Investigador = ClassRegistry::init('Investigador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Investigador);

		parent::tearDown();
	}

}
