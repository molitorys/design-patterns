<?php
require_once '../../../vendor/autoload.php';

use DesignPatterns\Adapter\Robot\EnemyTank;
use DesignPatterns\Adapter\Robot\EnemyRobot;
use DesignPatterns\Adapter\Robot\EnemyRobotAdapter;

$rx7Tank = new EnemyTank();
$fredTheRobot = new EnemyRobot();

$robotAdapter = new EnemyRobotAdapter($fredTheRobot);

echo 'The Robot:';
echo '<br />';
$fredTheRobot->reactToHuman('Paul');
echo '<br />';
$fredTheRobot->walkForward();
echo '<br />';
$fredTheRobot->smashWithHands();

echo '<br />';
echo '<br />';

echo 'The Enemy Tank:';
echo '<br />';
$rx7Tank->assignDriver('Frank');
echo '<br />';
$rx7Tank->driveForward();
echo '<br />';
$rx7Tank->fireWeapon();

echo '<br />';
echo '<br />';
echo 'The Robot with Adapter:';
echo '<br />';
$robotAdapter->assignDriver('Mark');
echo '<br />';
$robotAdapter->driveForward();
echo '<br />';
$robotAdapter->fireWeapon();
