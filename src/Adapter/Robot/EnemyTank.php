<?php

namespace DesignPatterns\Adapter\Robot;

/**
 * Enemy Tank class implements Enemy Attacker Robot interface
 */
class EnemyTank implements EnemyAttacker
{
    public function fireWeapon(): void
    {
        $attackDamage = rand(1,10);
        echo 'Enemy Tank does '.$attackDamage.' damage';
    }

    public function driveForward(): void
    {
        $movement = rand(1,5);
        echo 'Enemy Tank moves '.$movement.' spaces';
    }

    public function assignDriver(string $driverName): void
    {
        echo $driverName.' is driving the Enemy Tank';
    }
}
