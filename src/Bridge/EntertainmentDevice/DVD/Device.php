<?php

namespace DesignPatterns\Bridge\EntertainmentDevice\DVD;

use DesignPatterns\Bridge\EntertainmentDevice\EntertainmentDevice;

class Device extends EntertainmentDevice
{
    public function __construct(int $deviceState, int $maxSetting)
    {
        $this->deviceState = $deviceState;
        $this->maxSetting = $maxSetting;
    }

    public function buttonFivePressed(): void
    {
        echo 'Chapter back';

        $this->deviceState--;
    }

    public function buttonSixPressed(): void
    {
        echo 'Chapter forth';

        $this->deviceState++;
    }
}