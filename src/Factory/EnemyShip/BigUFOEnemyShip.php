<?php

namespace DesignPatterns\Factory\EnemyShip;

class BigUFOEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName('Big UFO Enemy Ship');
        $this->setDamage(40.00);
    }
}