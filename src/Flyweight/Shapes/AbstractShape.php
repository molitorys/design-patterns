<?php

namespace DesignPatterns\Flyweight\Shapes;

abstract class AbstractShape implements ShapeInterface
{
    protected string $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    abstract public function draw(int $x, int $y): void;
}