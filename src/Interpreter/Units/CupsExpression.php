<?php

namespace DesignPatterns\Interpreter\Units;

class CupsExpression extends Expression
{
    public function gallons(float $quantity): float
    {
        return $quantity / 16;
    }

    public function quarts(float $quantity): float
    {
        return $quantity / 8;
    }

    public function pints(float $quantity): float
    {
        return $quantity / 4;
    }

    public function cups(float $quantity): float
    {
        return $quantity;
    }

    public function tablespoons(float $quantity): float
    {
        return $quantity * 4;
    }
}