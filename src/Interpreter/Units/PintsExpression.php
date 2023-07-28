<?php

namespace DesignPatterns\Interpreter\Units;

class PintsExpression extends Expression
{
    public function gallons(float $quantity): float
    {
        return $quantity / 8;
    }

    public function quarts(float $quantity): float
    {
        return $quantity / 4;
    }

    public function pints(float $quantity): float
    {
        return $quantity;
    }

    public function cups(float $quantity): float
    {
        return $quantity * 4;
    }

    public function tablespoons(float $quantity): float
    {
        return $quantity * 8;
    }
}