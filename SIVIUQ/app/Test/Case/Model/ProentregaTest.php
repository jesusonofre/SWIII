<?php
App::uses('Proentrega', 'Model');

/**
 * Proentrega Test Case
 *
 */
class ProentregaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proentrega',
		'app.proyecto',
		'app.entidad',
		'app.proentidad',
		'app.evaluacion',
		'app.evaluador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proentrega = ClassRegistry::init('Proentrega');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proentrega);

		parent::tearDown();
	}

}
