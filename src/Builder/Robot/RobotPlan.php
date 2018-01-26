<?php
namespace DesignPatterns\Builder\Robot;

/**
 * Robot build plan
 */
interface RobotPlan
{
    public function setHead($head);
    public function setTorso($torso);
    public function setArms($arms);
    public function setLegs($legs);
}