<?php

namespace DesignPatterns\Command\ElectronicDevice;

class Radio implements ElectronicDeviceInterface
{
    private string $state = 'off';
    private int $volume = 5;

    public function on(): void
    {
        $this->state = 'on';
        echo 'Radio is ON';
    }

    public function off(): void
    {
        $this->state = 'off';
        echo 'Radio is off';
    }

    public function volumeUp(): void
    {
        if (!$this->isOn() || $this->volume >= 20) {
            return;
        }

        $this->volume++;
        echo 'Radio volume is at '.$this->volume;
    }

    public function volumeDown(): void
    {
        if (!$this->isOn() || $this->volume <= 0) {
            return;
        }

        $this->volume--;
        echo 'Radio volume is at '.$this->volume;
    }

    public function isOn(): bool
    {
        return $this->state === 'on';
    }
}