<?php

namespace DesignPatterns\Strategy\Animals\Flys;

class CantFly implements Flys
{
    public function fly(): string
    {
        return 'I cannot fly';
    }
}