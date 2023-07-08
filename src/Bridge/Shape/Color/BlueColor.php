<?php

namespace DesignPatterns\Bridge\Shape\Color;

class BlueColor implements ColorInterface
{
    public function fillColor(): void
    {
        echo 'Kolor niebieski';
    }
}