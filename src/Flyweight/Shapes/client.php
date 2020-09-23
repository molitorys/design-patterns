<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Flyweight\Shapes\ShapeFactory;

try {
    for($i = 0 ; $i < 10000 ; ++$i) {
        $shape = ShapeFactory::getShape(getRandomShapeType(), getRandomShapeColor());
        $shape->draw(getRandomPositionCord(), getRandomPositionCord());
        echo '<br>';
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

function getRandomShapeType(): string
{
    return getRandomArrayElement(['rectangle', 'circle']);
}

function getRandomShapeColor(): string
{
    return getRandomArrayElement(['red', 'green', 'blue', 'yellow', 'grey', 'pink', 'black', 'white']);
}

function getRandomPositionCord(): int
{
    return rand(1,100);
}

function getRandomArrayElement(array $array)
{
    return $array[rand(0, count($array) - 1)];
}
