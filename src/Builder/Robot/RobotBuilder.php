<?php
namespace DesignPatterns\Builder\Robot;

/**
 * Robot Builder interface
 */
interface RobotBuilder
{
  public function buildHead();
  public function buildTorso();
  public function buildArms();
  public function buildLegs();
  public function getRobot();  
}
