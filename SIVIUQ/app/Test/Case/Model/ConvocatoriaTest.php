<?php
App::uses('Convocatoria', 'Model');

/**
 * Convocatoria Test Case
 *
 */
class ConvocatoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.convocatoria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Convocatoria = ClassRegistry::init('Convocatoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Convocatoria);

		parent::tearDown();
	}

}
