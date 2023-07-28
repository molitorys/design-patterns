<?php

namespace DesignPatterns\MVC\Calculator;

class CalculatorView
{
    private int $firstNumber;
    private int $secondNumber;

    private int $calcSolution = 0;

    public function __construct()
    {
        $this->firstNumber = 8;
        $this->secondNumber = 5;
    }

    public function getFirstNumber(): int
    {
        return $this->firstNumber;
    }

    public function getSecondNumber(): int
    {
        return $this->secondNumber;
    }

    public function setCalcSolution($calcSolution): void
    {
        $this->calcSolution = $calcSolution;
    }

    public function display(): void
    {
        echo $this->firstNumber.' + '.$this->secondNumber.' = '.$this->calcSolution;
    }
}