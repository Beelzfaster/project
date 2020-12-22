<?php
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
	public function testGetResult()
	{
		$foo = new Foo;
		$result = $foo->getResult();

		$this->assertTrue($result);
	}
}