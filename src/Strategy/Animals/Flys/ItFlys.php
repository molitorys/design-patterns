<?php

namespace DesignPatterns\Strategy\Animals\Flys;

class ItFlys implements Flys
{
    public function fly(): string
    {
        return 'Flying High';
    }
}