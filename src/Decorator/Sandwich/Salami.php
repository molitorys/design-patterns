<?php
namespace DesignPatterns\Decorator\Sandwich;

use DesignPatterns\Decorator\Sandwich\SandwichInterface;
use DesignPatterns\Decorator\Sandwich\SandwichAddition;

class Salami extends SandwichAddition
{    
    public function __construct(SandwichInterface $sandwich)
    {
        parent::__construct($sandwich);
        $this->ingredients = ['salami'];
        $this->cost = 2.00;
    }
}