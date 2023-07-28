<?php

namespace DesignPatterns\Prototype\Animal;

class CloneFactory
{
    public function makeClone(Animal $animal): Animal
    {
        return clone $animal;
    }
}