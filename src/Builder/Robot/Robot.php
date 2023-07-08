<?php

namespace DesignPatterns\Builder\Robot;

/**
 * Robot which I built according to plan
 */
class Robot implements RobotPlan
{
    private string $head;
    private string $torso;
    private string $arms;
    private string $legs;
    
    public function setHead(string $head): void
    {
        $this->head = $head;
    }
    
    public function getHead(): ?string
    {
        return $this->head;
    }
    
    public function setTorso(string $torso): void
    {
        $this->torso = $torso;
    }
    
    public function getTorso(): ?string
    {
        return $this->torso;
    }
    
    public function setArms(string $arms): void
    {
        $this->arms = $arms;
    }
    
    public function getArms(): ?string
    {
        return $this->arms;
    }
    
    public function setLegs(string $legs): void
    {
        $this->legs = $legs;
    }
    
    public function getLegs(): ?string
    {
        return $this->legs;
    }
}