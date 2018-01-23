<?php
namespace DesignPatterns\Decorator\Sandwich;

use DesignPatterns\Decorator\Sandwich\SandwichInterface;
use DesignPatterns\Decorator\Sandwich\SandwichAddition;

/**
 * Sandwich ingredient class which can be used to extend base class functionality
 */
class Vegetables extends SandwichAddition
{    
    public function __construct(SandwichInterface $sandwich)
    {
        parent::__construct($sandwich);
        $this->ingredients = ['ogórek', 'pomidor', 'sałata'];
        $this->cost = 2.50;
    }
}