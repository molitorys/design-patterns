<?php

namespace DesignPatterns\Strategy\Animals;

use DesignPatterns\Strategy\Animals\Flys\Flys;

abstract class Animal
{
    protected string $name;
    protected float $weight;
    protected float $height;

    protected Flys $flyingType;

    public function tryToFly(): string
    {
        return $this->flyingType->fly();
    }

    public function setFlyingType(Flys $newFlyingType): void
    {
        $this->flyingType = $newFlyingType;
    }
}