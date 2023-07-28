<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Prototype\Animal\CloneFactory;
use DesignPatterns\Prototype\Animal\Sheep;

$animalMaker = new CloneFactory();

$sally = new Sheep();
$sally->setName('Sally');

$clonedSheep = $animalMaker->makeClone($sally);
$clonedSheep->setName('Sheepy');

echo $sally;
echo $clonedSheep;