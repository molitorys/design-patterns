<?php
namespace DesignPatterns\Decorator\Sandwich;

/**
 * Decorator sandwich interface
 */
interface SandwichInterface
{
    public function getCost();
    public function getIngredients();
}
