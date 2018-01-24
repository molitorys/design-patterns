<?php
namespace DesignPatterns\Adapter\ChainOfResponsibility;

/**
 * Simple example class which is a request to process for chian of responsibility 
 */
class Numbers
{
    private $num1;
    private $num2;

    private $calcType;

    public function __construct($num1, $num2, $calcType)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calcType = $calcType;
    }

    public function getNum1()
    {
        return $this->num1;
    }

    public function getNum2()
    {
        return $this->num2;
    }

    public function getCalcType()
    {
        return $this->calcType;
    }
}
