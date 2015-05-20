<?php
App::uses('Grupoinfe', 'Model');

/**
 * Grupoinfe Test Case
 *
 */
class GrupoinfeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupoinfe',
		'app.invesigador',
		'app.grupo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grupoinfe = ClassRegistry::init('Grupoinfe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupoinfe);

		parent::tearDown();
	}

}
