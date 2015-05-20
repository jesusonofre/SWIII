<?php
App::uses('Modalidad', 'Model');

/**
 * Modalidad Test Case
 *
 */
class ModalidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.modalidad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Modalidad = ClassRegistry::init('Modalidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Modalidad);

		parent::tearDown();
	}

}
