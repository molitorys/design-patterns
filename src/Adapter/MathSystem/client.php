<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Adapter\MathSystem\MathSystem;
use DesignPatterns\Adapter\MathSystem\MathSystemAdapter\Native;

$mathSystemAdapter = new Native();

$mathSystem = new MathSystem($mathSystemAdapter);

$a = 100.75987;
$b = 20.9811;

$add = $mathSystem->add($a, $b, 5);
$sub = $mathSystem->sub($a, $b, 3);
$mul = $mathSystem->mul($a, $b, 2);
$div = $mathSystem->div($a, $b, 1);

echo $add;
echo '<br>';
echo $sub;
echo '<br>';
echo $mul;
echo '<br>';
echo $div;

