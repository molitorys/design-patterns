<?php

namespace DesignPatterns\Factory\EnemyShip;

class UFOEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName('UFO Enemy Ship');
        $this->setDamage(20.00);
    }
}