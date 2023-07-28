<?php

namespace DesignPatterns\Interpreter\Units;

abstract class Expression
{
    public abstract function gallons(float $quantity): float;
    public abstract function quarts(float $quantity): float;
    public abstract function pints(float $quantity): float;
    public abstract function cups(float $quantity): float;
    public abstract function tablespoons(float $quantity): float;
}