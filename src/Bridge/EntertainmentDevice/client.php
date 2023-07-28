<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Bridge\EntertainmentDevice\TV\Device as TvDevice;
use DesignPatterns\Bridge\EntertainmentDevice\TV\RemoteMute as TvRemoteMute;
use DesignPatterns\Bridge\EntertainmentDevice\TV\RemotePause as TvRemotePause;
use DesignPatterns\Bridge\EntertainmentDevice\DVD\Device as DvdDevice;
use DesignPatterns\Bridge\EntertainmentDevice\DVD\RemotePause as DvdRemotePause;

$tvDevice = new TvRemoteMute(new TvDevice(1,200));
$tvDevice2 = new TvRemotePause(new TvDevice(1,200));
$dvdDevice = new DvdRemotePause(new DvdDevice(1,14));

echo 'Test TV with Mute <br />';
$tvDevice->buttonFivePressed();
$tvDevice->buttonSixPressed();
$tvDevice->buttonNinePressed();

echo '<br /><br />';

echo 'Test TV with Pause <br />';
$tvDevice2->buttonFivePressed();
$tvDevice2->buttonSixPressed();
$tvDevice2->buttonSixPressed();
$tvDevice2->buttonSixPressed();
$tvDevice2->buttonSixPressed();
$tvDevice2->buttonSixPressed();
$tvDevice2->buttonNinePressed();
$tvDevice2->deviceFeedback();

echo '<br /><br />';
echo 'Test DVD with Pause <br />';
$dvdDevice->buttonFivePressed();
$dvdDevice->buttonSixPressed();
$dvdDevice->buttonNinePressed();
