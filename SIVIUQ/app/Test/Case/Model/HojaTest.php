<?php
App::uses('Hoja', 'Model');

/**
 * Hoja Test Case
 *
 */
class HojaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hoja',
		'app.educacion',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hoja = ClassRegistry::init('Hoja');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hoja);

		parent::tearDown();
	}

}
