<?php

namespace DesignPatterns\Decorator\Sandwich;

/**
 * Decorator sandwich interface
 */
interface SandwichInterface
{
    public function getCost(): float;
    public function getIngredients(): array;
}
