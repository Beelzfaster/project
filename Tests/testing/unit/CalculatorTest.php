<?php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{

    public function testCalculator(){

        $a = 5;

        $b = 4;

        $c = $a + $b;

        $this->assertEquals(12, $c);
    }
    
}