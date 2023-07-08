<?php

namespace DesignPatterns\Bridge\Shape\Color;

class RedColor implements ColorInterface
{
    public function fillColor(): void
    {
        echo 'Kolor czerwony';
    }
}