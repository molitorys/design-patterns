<?php
namespace DesignPatterns\Builder\Robot;

use DesignPatterns\Adapter\Robot\RobotBuilder;
use DesignPatterns\Adapter\Robot\Robot;

/**
 * Robot Builder whi builds robot made of tin
 */
class TinRobotBuilder implements RobotBuilder
{
  private $robot;

  public function __construct()
  {
    $this->robot = new Robot();
  }

  public function buildHead()
  {
    $this->robot->setHead('aluminiowa kulka');
  }

  public function buildTorso()
  {
    $this->robot->setTorso('puszka aluminiowa');
  }

  public function buildArms()
  {
    $this->robot->setArms('zapałki');
  }

  public function buildLegs()
  {
    $this->robot->setLegs('kółka');
  }

  public function getRobot()
  {
    return $this->robot;
  }
}
