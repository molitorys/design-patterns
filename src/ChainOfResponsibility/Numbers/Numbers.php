<?php

namespace DesignPatterns\ChainOfResponsibility\Numbers;

/**
 * Simple example class which is a request to process for chian of responsibility 
 */
class Numbers
{
    private $num1;
    private $num2;

    private $calcType;

    public function __construct(float $num1, float $num2, string $calcType)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calcType = $calcType;
    }

    public function getNum1(): ?float
    {
        return $this->num1;
    }

    public function getNum2(): ?float
    {
        return $this->num2;
    }

    public function getCalcType(): string
    {
        return $this->calcType;
    }
}
