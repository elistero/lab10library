<?php

use PHPUnit\Framework\TestCase;
use Krauskeite\Exception;
use Krauskeite\Equation;

class EquationTest extends TestCase
{
    public function testEquation()
    {
        $equation = new Equation();
        $this->assertEquals([24], $equation->li_solve(3, -72));
        $this->assertEquals([18], $equation->li_solve(-4, 72));
        $this->assertEquals([1], $equation->li_solve(-1, 1));
    }

    public function testEquationBad()
    {
        $equation = new Equation();
        $this->expectExceptionMessage('Ошибка: уравнения не существует.');
        $this->expectException(Exception::class);
        $equation->li_solve(0, -7);
        $equation->li_solve(0, 2);
}   
