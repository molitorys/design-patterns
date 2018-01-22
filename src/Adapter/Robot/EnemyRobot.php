<?php
namespace DesignPatterns\Adapter\Robot;

class EnemyRobot
{
  public function smashWithHands()
  {
    $attackDamage = rand(1,10);

    echo 'Enemy Robot causes '.$attackDamage.' damage with its hands';
  }

  public function walkForward()
  {
    $movement = rand(1,5);

    echo 'Enemy Robot walks forward '.$movement.' spaces';
  }

  public function reactToHuman($driverName)
  {
    echo 'Enemy Robot tramps on '.$driverName;
  }
}
