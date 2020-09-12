<?php

namespace DesignPatterns\Builder\Robot;

/**
 * Robot build plan
 */
interface RobotPlan
{
    public function setHead(string $head): void;
    public function setTorso(string $torso): void;
    public function setArms(string $arms): void;
    public function setLegs(string $legs): void;
}