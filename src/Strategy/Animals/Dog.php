<?php

namespace DesignPatterns\Strategy\Animals;

use DesignPatterns\Strategy\Animals\Flys\CantFly;

class Dog extends Animal
{
    public function __construct()
    {
        $this->flyingType = new CantFly();
    }
}