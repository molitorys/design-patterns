<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Builder\Robot\TinRobotBuilder;
use DesignPatterns\Builder\Robot\RobotEngineer;

$tinRobot = new TinRobotBuilder();
$robotEngineer = new RobotEngineer($tinRobot);

$robotEngineer->constructRobot();

$robot = $robotEngineer->getRobot();

echo 'Budowa Robota';
echo '<br />';
echo 'Głowa: '.$robot->getHead();
echo '<br />';
echo 'Korpus: '.$robot->getTorso();
echo '<br />';
echo 'Ręce: '.$robot->getArms();
echo '<br />';
echo 'Nogi: '.$robot->getLegs();
