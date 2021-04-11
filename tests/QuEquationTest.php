<?php

use PHPUnit\Framework\TestCase;
use Krauskeite\Exception;
use Krauskeite\QuEquation;

class QuEquationTest extends TestCase
{
    public function testQuEquationBad()
    {
        $quequation = new QuEquation();
        $this->expectExceptionMessage("Ошибка: уравнение не имеет корней.");
        $this->expectException(Exception::class);
        $quequation->solve(4, 0, 8);
        $quequation->solve(4, 2, 1);
    }

    public function testQuEquation()
    {
        $quequation = new QuEquation();
        $this->assertEquals([-5, 5], $quequation->solve(-3, 0, 75));
        $this->assertEquals([-3], $quequation->solve(0, 3, 9));
        $this->assertEquals([-3], $quequation->solve(1, 6, 9));
    }
}