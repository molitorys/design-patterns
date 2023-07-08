<?php

namespace DesignPatterns\Command\ElectronicDevice\Command;

use DesignPatterns\Command\ElectronicDevice\ElectronicDeviceInterface;

class TurnVolumeDown implements CommandInterface
{
    private ElectronicDeviceInterface $electronicDevice;

    public function __construct(ElectronicDeviceInterface $electronicDevice)
    {
        $this->electronicDevice = $electronicDevice;
    }

    public function execute(): void
    {
        $this->electronicDevice->volumeDown();
    }

    public function undo(): void
    {
        $this->electronicDevice->volumeUp();
    }
}