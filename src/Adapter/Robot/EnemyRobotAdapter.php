<?php
namespace DesignPatterns\Adapter\Robot;

use DesignPatterns\Adapter\Robot\EnemyAttacker;

class EnemyRobotAdapter implements EnemyAttacker
{
  private $theRobot;

  public function __construct(EnemyRobot $newRobot)
  {
    $this->theRobot = $newRobot;
  }

  public function fireWeapon()
  {
    $this->theRobot->smashWithHands();
  }

  public function driveForward()
  {
    $this->theRobot->walkForward();
  }

  public function assignDriver($driverName)
  {
    $this->theRobot->reactToHuman($driverName);
  }
}
