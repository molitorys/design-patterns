<?php
namespace DesignPatterns\Adapter\Robot;

/**
 * Interface for Robot Adapter Design Pattern
 */
interface EnemyAttacker
{
    public function fireWeapon();
    public function driveForward();
    public function assignDriver($driverName);
}
