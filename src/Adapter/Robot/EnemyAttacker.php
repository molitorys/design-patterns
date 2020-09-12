<?php

namespace DesignPatterns\Adapter\Robot;

/**
 * Interface for Robot Adapter Design Pattern
 */
interface EnemyAttacker
{
    public function fireWeapon(): void;
    public function driveForward(): void;
    public function assignDriver(string $driverName): void;
}
