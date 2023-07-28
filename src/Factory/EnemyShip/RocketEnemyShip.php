<?php

namespace DesignPatterns\Factory\EnemyShip;

class RocketEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName('Rocket Enemy Ship');
        $this->setDamage(15.00);
    }
}
