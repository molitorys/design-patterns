<?php

namespace DesignPatterns\Strategy\Animals;

use DesignPatterns\Strategy\Animals\Flys\ItFlys;

class Bird extends Animal
{
    public function __construct()
    {
        $this->flyingType = new ItFlys();
    }
}