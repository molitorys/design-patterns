<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Factory\EnemyShip\EnemyShip;
use DesignPatterns\Factory\EnemyShip\EnemyShipFactory;

$shipType = 'R';

$enemyShip = (new EnemyShipFactory())->makeEnemyShip($shipType);

if ($enemyShip) {
    doStuffEnemy($enemyShip);
} else {
    echo 'No Enemy Ship Selected';
}

function doStuffEnemy(EnemyShip $enemyShip)
{
    $enemyShip->displayEnemyShip();
    echo '<br />';
    $enemyShip->followHeroShip();
    echo '<br />';
    $enemyShip->enemyShipShoots();
}
