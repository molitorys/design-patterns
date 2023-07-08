<?php

namespace DesignPatterns\Bridge\Shape;

class Square extends AbstractShape
{
    public function fillColor(): void
    {
        echo 'Wypełniam kwadrat kolorem... ';
        $this->color->fillColor();
    }
}