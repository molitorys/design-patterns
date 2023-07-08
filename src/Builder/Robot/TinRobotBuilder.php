<?php

namespace DesignPatterns\Builder\Robot;

/**
 * Robot Builder whi builds robot made of tin
 */
class TinRobotBuilder implements RobotBuilder
{
  private Robot $robot;

  public function __construct()
  {
    $this->robot = new Robot();
  }

  public function buildHead(): void
  {
    $this->robot->setHead('aluminiowa kulka');
  }

  public function buildTorso(): void
  {
    $this->robot->setTorso('puszka aluminiowa');
  }

  public function buildArms(): void
  {
    $this->robot->setArms('zapałki');
  }

  public function buildLegs(): void
  {
    $this->robot->setLegs('kółka');
  }

  public function getRobot(): Robot
  {
    return $this->robot;
  }
}
