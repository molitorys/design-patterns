<?php

namespace DesignPatterns\Bridge\Shape;

class Circle extends AbstractShape
{
    public function fillColor(): void
    {
        echo 'Wypełniam koło kolorem... ';
        $this->color->fillColor();
    }
}