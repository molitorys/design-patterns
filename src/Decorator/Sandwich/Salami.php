<?php
namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\SandwichInterface;
use DesignPatterns\Decorator\SandwichAddition;

class Salami extends SandwichAddition
{    
    public function __construct(SandwichInterface $sandwich)
    {
        parent::__construct($sandwich);
        $this->ingredients = ['salami'];
        $this->cost = 2.00;
    }
}