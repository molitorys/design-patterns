<?php

namespace DesignPatterns\Adapter\Robot;

/**
 * Adapter class which implements Enemy Attacker Robot interface
 */
class EnemyRobotAdapter implements EnemyAttacker
{
    private $theRobot;

    public function __construct(EnemyRobot $newRobot)
    {
        $this->theRobot = $newRobot;
    }

    public function fireWeapon(): void
    {
        $this->theRobot->smashWithHands();
    }

    public function driveForward(): void
    {
        $this->theRobot->walkForward();
    }

    public function assignDriver(string $driverName): void
    {
        $this->theRobot->reactToHuman($driverName);
    }
}
