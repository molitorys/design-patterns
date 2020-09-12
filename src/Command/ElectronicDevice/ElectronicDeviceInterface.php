<?php

namespace DesignPatterns\Command\ElectronicDevice;

interface ElectronicDeviceInterface
{
    public function on(): void;
    public function off(): void;
    public function volumeUp(): void;
    public function volumeDown(): void;
    public function isOn(): bool;
}