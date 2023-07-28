<?php

namespace DesignPatterns\TemplateMethod\Sandwich;

abstract class Hoagie
{
    protected array $meatUsed = ['Salami', 'Pepperoni', 'Capricola Ham'];
    protected array $cheeseUsed = ['Provalone'];
    protected array $vegetablesUsed = ['Lettuce', 'Tomatoes', 'Onions', 'Sweet Peppers'];
    protected array $condimentsUsed = ['Oil', 'Vinegar'];

    public final function makeSandwich(): void
    {
        $this->cutBun();

        if ($this->customerWantsMeat()) {
            $this->addMeat();
        }

        if ($this->customerWantsCheese()) {
            $this->addCheese();
        }

        if ($this->customerWantsVegetables()) {
            $this->addVegetables();
        }

        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }

        $this->wrapTheHoagie();
    }

    public function cutBun()
    {
        echo 'The Hoagie is cut <br />';
    }

    public abstract function addMeat(): void;
    public abstract function addCheese(): void;
    public abstract function addVegetables(): void;
    public abstract function addCondiments(): void;

    public function customerWantsMeat(): bool
    {
        return true;
    }

    public function customerWantsCheese(): bool
    {
        return true;
    }

    public function customerWantsVegetables(): bool
    {
        return true;
    }

    public function customerWantsCondiments(): bool
    {
        return true;
    }

    public function wrapTheHoagie(): void
    {
        echo 'Wrap the Hoagie <br />';
    }
}