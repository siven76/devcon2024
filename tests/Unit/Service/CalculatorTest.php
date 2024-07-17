<?php

namespace App\Tests\Unit\Service;

use App\Service\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);

        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $result = $calculator->subtract(5, 3);

        $this->assertEquals(2, $result);
    }

    public function testMultiply()
    {
        $calculator = new Calculator();
        $result = $calculator->multiply(2, 3);

        $this->assertEquals(6, $result);
    }

    public function testDivide()
    {
        $calculator = new Calculator();
        $result = $calculator->divide(6, 3);

        $this->assertEquals(2, $result);
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Division by zero');

        $calculator = new Calculator();
        $calculator->divide(6, 0);
    }
}
