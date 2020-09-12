<?php

namespace DesignPatterns\Decorator\Sandwich;

/**
 * Ingredients abstrack class
 */
abstract class SandwichAddition implements SandwichInterface
{
    protected $ingredients = [];
    protected $cost = 0.00;
    
    protected $sandwich;

    protected function __construct(SandwichInterface $sandwich)
    {
        $this->sandwich = $sandwich;
    }
    
    public function getCost(): float
    {
        return $this->sandwich->getCost() + $this->cost;
    }
    
    public function getIngredients(): array
    {
        return array_merge($this->sandwich->getIngredients(), $this->ingredients);
    }
}

