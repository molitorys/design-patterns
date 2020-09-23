<?php

namespace DesignPatterns\Flyweight\Shapes;

Interface ShapeInterface
{
    public function __construct(string $color);
    public function draw(int $x, int $y): void;
}