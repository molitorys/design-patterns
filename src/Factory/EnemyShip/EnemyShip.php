<?php

namespace DesignPatterns\Factory\EnemyShip;

abstract class EnemyShip
{
    private string $name;
    private float $damage;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDamage(): float
    {
        return $this->damage;
    }

    public function setDamage(float $damage): void
    {
        $this->damage = $damage;
    }

    public function followHeroShip(): void
    {
        echo $this->name.' is following the Hero';
    }

    public function displayEnemyShip(): void
    {
        echo $this->name.' is on the screen';
    }

    public function enemyShipShoots(): void
    {
        echo $this->name.' attacks and does '.$this->damage.' damage';
    }
}