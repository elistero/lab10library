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
        $this->expectExceptionMessage("Ошибка: уравнения не существует.");
        $quequation->solve(7, 2, 4);
        $quequation->solve(5, 2, 3);
        $this->expectException(Exception::class);
    }

    public function testQuEquation()
    {
        $quequation = new QuEquation();
        $this->assertEquals([10, 60], $quequation->solve(1, -70, 600));
        $this->assertEquals([-3], $quequation->solve(0, 3, 9));
        $this->assertEquals([3], $quequation->solve(3, -18, 27));
    }
}
