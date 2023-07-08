<?php

namespace DesignPatterns\Flyweight\Shapes;

class Circle extends AbstractShape
{
    public function draw(int $x, int $y): void
    {
        echo 'Drawing Circle of '.$this->color.' color, on position '.$x.', '.$y;
    }
}