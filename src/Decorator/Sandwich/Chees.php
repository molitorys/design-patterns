<?php
namespace DesignPatterns\Decorator\Sandwich;

use DesignPatterns\Decorator\Sandwich\SandwichInterface;
use DesignPatterns\Decorator\Sandwich\SandwichAddition;

/**
 * Sandwich ingredient class which can be used to extend base class functionality
 */
class Chees extends SandwichAddition
{    
    public function __construct(SandwichInterface $sandwich)
    {
        parent::__construct($sandwich);
        $this->ingredients = ['ser'];
        $this->cost = 1.50;
    }
}