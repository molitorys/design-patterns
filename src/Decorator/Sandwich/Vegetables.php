<?php
namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\SandwichInterface;
use DesignPatterns\Decorator\SandwichAddition;

class Vegetables extends SandwichAddition
{    
    public function __construct(SandwichInterface $sandwich)
    {
        parent::__construct($sandwich);
        $this->ingredients = ['ogórek', 'pomidor', 'sałata'];
        $this->cost = 2.50;
    }
}