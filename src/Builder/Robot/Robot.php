<?php
namespace DesignPatterns\Builder\Robot;

use DesignPatterns\Adapter\Robot\RobotPlan;

/**
 * Robot which i built according to plan
 */
class Robot implements RobotPlan
{
    private $head;
    private $torso;
    private $arms;
    private $legs;
    
    public function setHead($head)
    {
        $this->head = $head;
    }
    
    public function getHead()
    {
        return $this->head;
    }
    
    public function setTorso($torso)
    {
        $this->torso = $torso;
    }
    
    public function getTorso()
    {
        return $this->torso;
    }
    
    public function setArms($arms)
    {
        $this->arms = $arms;
    }
    
    public function getArms()
    {
        return $this->arms;
    }
    
    public function setLegs($legs)
    {
        $this->legs = $legs;
    }
    
    public function getLegs()
    {
        return $this->legs;
    }
}