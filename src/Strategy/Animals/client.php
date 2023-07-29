<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Strategy\Animals\Bird;
use DesignPatterns\Strategy\Animals\Dog;
use DesignPatterns\Strategy\Animals\Flys\ItFlys;

$sparky = new Dog();
$tweety = new Bird();

echo 'Sparky: '.$sparky->tryToFly();
echo '<br />';
echo 'Tweety: '.$tweety->tryToFly();
echo '<br />';

$sparky->setFlyingType(new ItFlys());

echo 'Sparky: '.$sparky->tryToFly();