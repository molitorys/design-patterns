<?php

namespace DesignPatterns\Builder\Robot;

/**
 * Build a robot 
 */
class RobotEngineer
{
  private $robotBuilder;

  public function __construct(RobotBuilder $robotBuilder)
  {
    $this->robotBuilder = $robotBuilder;
  }

  public function getRobot(): Robot
  {
    return $this->robotBuilder->getRobot();
  }

  public function constructRobot(): void
  {
    $this->robotBuilder->buildHead();
    $this->robotBuilder->buildTorso();
    $this->robotBuilder->buildArms();
    $this->robotBuilder->buildLegs();
  }
}
