<?php
namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\SandwichInterface;
use DesignPatterns\Decorator\SandwichAddition;

class Chees extends SandwichAddition
{    
    public function __construct(SandwichInterface $sandwich)
    {
        parent::__construct($sandwich);
        $this->ingredients = ['ser'];
        $this->cost = 1.50;
    }
}