<?php

namespace DesignPatterns\Bridge\EntertainmentDevice;

abstract class EntertainmentDevice
{
    public int $deviceState = 0;
    public int $maxSetting = 0;
    public int $volumeLevel = 0;

    public abstract function buttonFivePressed(): void;
    public abstract function buttonSixPressed(): void;

    public function buttonSevenPressed(): void
    {
        $this->volumeLevel++;

        echo 'Volume at '.$this->volumeLevel;
    }

    public function buttonEightPressed(): void
    {
        $this->volumeLevel--;

        echo 'Volume at '.$this->volumeLevel;
    }

    public function deviceFeedback(): void
    {
        if($this->deviceState > $this->maxSetting || $this->deviceState < 0) {
            $this->deviceState = 0;
        }

        echo 'On '.$this->deviceState;
    }
}