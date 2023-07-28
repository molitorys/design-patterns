<?php

namespace DesignPatterns\Factory\EnemyShip;

class EnemyShipFactory
{
    public function makeEnemyShip(string $newShipType): ?EnemyShip
    {
        return match ($newShipType) {
            'U' => new UFOEnemyShip(),
            'R' => new RocketEnemyShip(),
            'B' => new BigUFOEnemyShip(),
            default => null,
        };
    }
}