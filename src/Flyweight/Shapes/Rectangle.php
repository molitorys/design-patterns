<?php

namespace DesignPatterns\Flyweight\Shapes;

class Rectangle extends AbstractShape
{
    public function draw(int $x, int $y): void
    {
        echo 'Drawing Rectangle of '.$this->color.' color, on position '.$x.', '.$y;
    }
}