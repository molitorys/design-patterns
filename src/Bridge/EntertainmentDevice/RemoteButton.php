<?php

namespace DesignPatterns\Bridge\EntertainmentDevice;

abstract class RemoteButton
{
    private EntertainmentDevice $device;

    public function __construct(EntertainmentDevice $device)
    {
        $this->device = $device;
    }

    public function buttonFivePressed(): void
    {
        $this->device->buttonFivePressed();
    }

    public function buttonSixPressed(): void
    {
        $this->device->buttonSixPressed();
    }

    public function deviceFeedback(): void
    {
        $this->device->deviceFeedback();
    }

    public abstract function buttonNinePressed(): void;
}
