<?php
namespace DesignPatterns\Decorator\Sandwich;

use DesignPatterns\Decorator\Sandwich\SandwichInterface;
use DesignPatterns\Decorator\Sandwich\SandwichAddition;

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