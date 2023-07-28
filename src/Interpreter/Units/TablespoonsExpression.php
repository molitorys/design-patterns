<?php

namespace DesignPatterns\Interpreter\Units;

class TablespoonsExpression extends Expression
{
    public function gallons(float $quantity): float
    {
        return $quantity / 256;
    }

    public function quarts(float $quantity): float
    {
        return $quantity / 16;
    }

    public function pints(float $quantity): float
    {
        return $quantity / 8;
    }

    public function cups(float $quantity): float
    {
        return $quantity / 4;
    }

    public function tablespoons(float $quantity): float
    {
        return $quantity;
    }
}