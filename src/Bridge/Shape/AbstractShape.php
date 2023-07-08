<?php

namespace DesignPatterns\Bridge\Shape;

use DesignPatterns\Bridge\Shape\Color\ColorInterface;

abstract class AbstractShape
{
    protected ColorInterface $color;

    public function __construct(ColorInterface $color)
    {
        $this->color = $color;
    }

    abstract public function fillColor(): void;
}