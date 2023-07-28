<?php

namespace DesignPatterns\MVC\Calculator;

class CalculatorModel
{
    private int $calculationValue = 0;

    public function getCalculationValue(): int
    {
        return $this->calculationValue;
    }

    public function addTwoNumbers(int $firstNumber, int $secondNumber): void
    {
        $this->calculationValue = $firstNumber + $secondNumber;
    }

}