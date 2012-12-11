<?php

/**
 * @group Model
 */

class SomeModelTest extends CIUnit_TestCase
{
	public function __construct($name = NULL, array $data = array(), $dataName = '')
	{
		parent::__construct($name, $data, $dataName);
	}
	
	public function setUp()
	{
		parent::tearDown();
		parent::setUp();
	}

	public function testSomeThingWedlikeToTest()
	{
		$this->assertTrue(TRUE);
		$this->assertEquals("ABC", "ABC");
		
	}
}
