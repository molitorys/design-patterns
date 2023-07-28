<?php

namespace DesignPatterns\Bridge\EntertainmentDevice\TV;

use DesignPatterns\Bridge\EntertainmentDevice\EntertainmentDevice;

class Device extends EntertainmentDevice
{
    public function __construct($deviceState, $maxSetting)
    {
        $this->deviceState = $deviceState;
        $this->maxSetting = $maxSetting;
    }

    public function buttonFivePressed(): void
    {
        echo 'Channel down';

        $this->deviceState--;
    }

    public function buttonSixPressed(): void
    {
        echo 'Channel up';

        $this->deviceState++;
    }
}