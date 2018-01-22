<?php
namespace DesignPatterns\Decorator\Sandwich;

use DesignPatterns\Decorator\Sandwich\SandwichInterface;

class BasicSandwich implements SandwichInterface
{
    private $ingredients = ['bułka', 'masło', 'majonez'];
    private $cost = 8.00;
    
    public function getCost()
    {
        return $this->cost;
    }
    
    public function getIngredients()
    {
        return $this->ingredients;
    }
}