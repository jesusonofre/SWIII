<?php
App::uses('Linea', 'Model');

/**
 * Linea Test Case
 *
 */
class LineaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.linea'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Linea = ClassRegistry::init('Linea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Linea);

		parent::tearDown();
	}

}
