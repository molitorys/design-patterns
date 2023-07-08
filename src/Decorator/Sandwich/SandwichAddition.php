<?php

namespace DesignPatterns\Decorator\Sandwich;

/**
 * Ingredients abstract class
 */
abstract class SandwichAddition implements SandwichInterface
{
    protected array $ingredients = [];
    protected float $cost = 0.00;
    
    protected SandwichInterface $sandwich;

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

