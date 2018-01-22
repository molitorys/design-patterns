<?php
namespace DesignPatterns\Decorator\Sandwich;

use DesignPatterns\Decorator\Sandwich\SandwichInterface;

abstract class SandwichAddition implements SandwichInterface
{
    protected $ingredients = [];
    protected $cost = 0.00;
    
    protected $sandwich;

    protected function __construct(SandwichInterface $sandwich)
    {
        $this->sandwich = $sandwich;
    }
    
    public function getCost()
    {
        return $this->sandwich->getCost() + $this->cost;
    }
    
    public function getIngredients()
    {
        return array_merge($this->sandwich->getIngredients(), $this->ingredients);
    }
}

