<?php

namespace DesignPatterns\Command\ElectronicDevice\Command;

use DesignPatterns\Command\ElectronicDevice\ElectronicDeviceInterface;

class TurnVolumeUp implements CommandInterface
{
    private $electronicDevice;

    public function __construct(ElectronicDeviceInterface $electronicDevice)
    {
        $this->electronicDevice = $electronicDevice;
    }

    public function execute(): void
    {
        $this->electronicDevice->volumeUp();
    }

    public function undo(): void
    {
        $this->electronicDevice->volumeDown();
    }
}