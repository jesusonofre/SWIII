<?php
App::uses('Educacion', 'Model');

/**
 * Educacion Test Case
 *
 */
class EducacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.educacion',
		'app.hoja'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Educacion = ClassRegistry::init('Educacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Educacion);

		parent::tearDown();
	}

}
