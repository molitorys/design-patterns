<?php

$clients = [
    'Adapter - Robot' => 'Adapter/Robot/client.php',
    'Bridge - Shape' => 'Bridge/Shape/client.php',
    'Builder - Robot' => 'Builder/Robot/client.php',
    'Chain of Responsibility - Numbers' => 'ChainOfResponsibility/Numbers/client.php',
    'Command - Electronic Device' => 'Command/ElectronicDevice/client.php',
    'Decorator - Sandwich' => 'Decorator/Sandwich/client.php',
    'Facade - Bank Account' => 'Facade/BankAccount/client.php',
    'Flyweight - Shapes' => 'Flyweight/Shapes/client.php',
    'Observer - Stock' => 'Observer/Stock/client.php',
    'Singleton - Database Manager' => 'Singleton/DatabaseManager/client.php',
    'Strategy - Compression' => 'Strategy/Compression/client.php',
];

echo '<h1>Design Patterns</h1>';
foreach ($clients as $patternName => $client) {
    echo '<a target="_blank" href="'.$client.'">'.$patternName.'</a><br>';
}