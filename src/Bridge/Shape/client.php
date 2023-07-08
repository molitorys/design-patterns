<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Bridge\Shape\Circle;
use DesignPatterns\Bridge\Shape\Square;
use DesignPatterns\Bridge\Shape\Color\BlueColor;
use DesignPatterns\Bridge\Shape\Color\RedColor;

$circle = new Circle(new RedColor());
$circle->fillColor();

echo '<br>';

$square = new Square(new BlueColor());
$square->fillColor();