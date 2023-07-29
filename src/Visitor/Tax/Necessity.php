<?php

namespace DesignPatterns\Visitor\Tax;

class Necessity implements Visitable
{
    private float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function accept(Visitor $visitor): float
    {
        return $visitor->visitNecessity($this);
    }
}