<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Command\ElectronicDevice\Command\TurnOff;
use DesignPatterns\Command\ElectronicDevice\Command\TurnOn;
use DesignPatterns\Command\ElectronicDevice\Command\TurnVolumeDown;
use DesignPatterns\Command\ElectronicDevice\Command\TurnVolumeUp;
use DesignPatterns\Command\ElectronicDevice\RemoteController;
use DesignPatterns\Command\ElectronicDevice\Television;

// Create electronic device
$tv = new Television();

// Create commands
$turnOnCommand = new TurnOn($tv);
$turnOffCommand = new TurnOff($tv);
$turnVolumeUpCommand = new TurnVolumeUp($tv);
$turnVolumeDownCommand = new TurnVolumeDown($tv);

// Exectue commands
$remoteController = new RemoteController();

$remoteController->press($turnOnCommand);
echo '<br>';

$remoteController->press($turnOffCommand);
echo '<br>';
$remoteController->pressUndo($turnOffCommand);
echo '<br>';

$remoteController->press($turnVolumeUpCommand);
echo '<br>';
$remoteController->press($turnVolumeUpCommand);
echo '<br>';
$remoteController->press($turnVolumeUpCommand);
echo '<br>';

$remoteController->press($turnVolumeDownCommand);
echo '<br>';
$remoteController->press($turnVolumeDownCommand);
echo '<br>';
$remoteController->press($turnVolumeDownCommand);
echo '<br>';


