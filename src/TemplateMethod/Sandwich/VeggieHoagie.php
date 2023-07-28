<?php

namespace DesignPatterns\TemplateMethod\Sandwich;

class VeggieHoagie extends Hoagie
{
    public function addMeat(): void
    { }

    public function addCheese(): void
    { }

    public function addVegetables(): void
    {
        echo 'Adding the vegetables: '.implode(', ', $this->vegetablesUsed).'<br />';
    }

    public function addCondiments(): void
    {
        echo 'Adding the condiments: '.implode(', ', $this->condimentsUsed).'<br />';
    }

    public function customerWantsMeat(): bool
    {
        return false;
    }

    public function customerWantsCheese(): bool
    {
        return false;
    }
}