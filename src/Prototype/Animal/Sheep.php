<?php

namespace DesignPatterns\Prototype\Animal;

class Sheep implements Animal
{
    private string $name;

    public function __construct()
    {
        echo 'Sheep is made <br />';
    }

    public function __clone()
    {
        echo 'Sheep is cloned <br />';
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return 'Dolly is my hero, Baaaaa! - my name is '.$this->name.' <br />';
    }
}