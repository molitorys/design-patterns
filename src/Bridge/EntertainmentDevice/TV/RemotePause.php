<?php

namespace DesignPatterns\Bridge\EntertainmentDevice\TV;

use DesignPatterns\Bridge\EntertainmentDevice\EntertainmentDevice;
use DesignPatterns\Bridge\EntertainmentDevice\RemoteButton;

class RemotePause extends RemoteButton
{
    public function __construct(EntertainmentDevice $device)
    {
        parent::__construct($device);
    }

    public function buttonNinePressed(): void
    {
        echo 'TV was Paused';
    }
}