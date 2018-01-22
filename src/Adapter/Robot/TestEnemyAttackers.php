<?php
require_once '../../../vendor/autoload.php';

use DesignPatterns\Adapter\Robot\EnemyTank;

$rx7Tank = new EnemyTank();

echo 'The Enemy Tank:';
echo '<br />';
$rx7Tank->assignDriver('Frank');
echo '<br />';
$rx7Tank->driveForward();
echo '<br />';
$rx7Tank->fireWeapon();
