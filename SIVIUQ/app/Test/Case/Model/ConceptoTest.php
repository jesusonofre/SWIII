<?php
App::uses('Concepto', 'Model');

/**
 * Concepto Test Case
 *
 */
class ConceptoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.concepto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Concepto = ClassRegistry::init('Concepto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Concepto);

		parent::tearDown();
	}

}
