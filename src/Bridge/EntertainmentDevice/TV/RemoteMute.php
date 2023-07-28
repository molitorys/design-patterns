<?php

namespace DesignPatterns\Bridge\EntertainmentDevice\TV;

use DesignPatterns\Bridge\EntertainmentDevice\EntertainmentDevice;
use DesignPatterns\Bridge\EntertainmentDevice\RemoteButton;

class RemoteMute extends RemoteButton
{
    public function __construct(EntertainmentDevice $device)
    {
        parent::__construct($device);
    }

    public function buttonNinePressed(): void
    {
        echo 'TV was Muted';
    }
}