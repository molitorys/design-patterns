<?php
namespace DesignPatterns\Adapter\Robot;

interface EnemyAttacker
{
    public function fireWeapon();
    public function driveForward();
    public function assignDriver($driverName);
}
