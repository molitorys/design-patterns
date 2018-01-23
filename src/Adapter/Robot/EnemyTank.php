<?php
namespace DesignPatterns\Adapter\Robot;

use DesignPatterns\Adapter\Robot\EnemyAttacker;

/**
 * Enemy Tank class implements Enemy Attacker Robot interface
 */
class EnemyTank implements EnemyAttacker
{
    public function fireWeapon()
    {
        $attackDamage = rand(1,10);
        echo 'Enemy Tank does '.$attackDamage.' damage';
    }

    public function driveForward()
    {
        $movement = rand(1,5);
        echo 'Enemy Tank moves '.$movement.' spaces';
    }

    public function assignDriver($driverName)
    {
        echo $driverName.' is driving the Enemy Tank';
    }
}
