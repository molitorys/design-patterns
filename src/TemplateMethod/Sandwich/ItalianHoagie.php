<?php

namespace DesignPatterns\TemplateMethod\Sandwich;

class ItalianHoagie extends Hoagie
{
    public function addMeat(): void
    {
        echo 'Adding the meat: '.implode(', ', $this->meatUsed).'<br />';
    }

    public function addCheese(): void
    {
        echo 'Adding the chees: '.implode(', ', $this->cheeseUsed).'<br />';
    }

    public function addVegetables(): void
    {
        echo 'Adding the vegetables: '.implode(', ', $this->vegetablesUsed).'<br />';
    }

    public function addCondiments(): void
    {
        echo 'Adding the condiments: '.implode(', ', $this->condimentsUsed).'<br />';
    }
}