<?php

namespace DesignPatterns\Adapter\Robot;

/**
 * Class which interfece is adaptee to the system
 */
class EnemyRobot
{
    public function smashWithHands(): void
    {
        $attackDamage = rand(1,10);

        echo 'Enemy Robot causes '.$attackDamage.' damage with its hands';
    }

    public function walkForward(): void
    {
        $movement = rand(1,5);

        echo 'Enemy Robot walks forward '.$movement.' spaces';
    }

    public function reactToHuman(string $driverName): void
    {
      echo 'Enemy Robot tramps on '.$driverName;
    }
}
