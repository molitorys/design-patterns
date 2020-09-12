<?php

namespace DesignPatterns\Builder\Robot;

/**
 * Robot Builder interface
 */
interface RobotBuilder
{
  public function buildHead(): void;
  public function buildTorso(): void;
  public function buildArms(): void;
  public function buildLegs(): void;
  public function getRobot(): Robot;
}
