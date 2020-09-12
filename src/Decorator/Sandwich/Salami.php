<?php

namespace DesignPatterns\Decorator\Sandwich;

/**
 * Sandwich ingredient class which can be used to extend base class functionality
 */
class Salami extends SandwichAddition
{    
    public function __construct(SandwichInterface $sandwich)
    {
        parent::__construct($sandwich);
        $this->ingredients = ['salami'];
        $this->cost = 2.00;
    }
}