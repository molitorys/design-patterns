<?php

namespace DesignPatterns\Decorator\Sandwich;

/**
 * Decorator base class
 */
class BasicSandwich implements SandwichInterface
{
    private array $ingredients = ['bułka', 'masło', 'majonez'];
    private float $cost = 8.00;
    
    public function getCost(): float
    {
        return $this->cost;
    }
    
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}