<?php

namespace DesignPatterns\Command\ElectronicDevice;

class Television implements ElectronicDeviceInterface
{
    private string $state = 'off';
    private int $volume = 10;

    public function on(): void
    {
        $this->state = 'on';
        echo 'TV is on';
    }

    public function off(): void
    {
        $this->state = 'off';
        echo 'TV is off';
    }

    public function volumeUp(): void
    {
        if (!$this->isOn() || $this->volume >= 30) {
            return;
        }

        $this->volume++;
        echo 'TV volume is at '.$this->volume;
    }

    public function volumeDown(): void
    {
        if (!$this->isOn() || $this->volume <= 0) {
            return;
        }

        $this->volume--;
        echo 'TV volume is at '.$this->volume;
    }

    public function isOn(): bool
    {
        return $this->state === 'on';
    }
}