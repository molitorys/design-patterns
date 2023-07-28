<?php

$clients = [
    'Adapter' => [
        'Robot' => 'Adapter/Robot/client.php'
    ],
    'Bridge' => [
        'Shape' => 'Bridge/Shape/client.php',
        'Entertainment Device' => 'Bridge/EntertainmentDevice/client.php'
    ],
    'Builder' => [
        'Robot' => 'Builder/Robot/client.php'
    ],
    'Chain of Responsibility' => [
        'Numbers' => 'ChainOfResponsibility/Numbers/client.php'
    ],
    'Command' => [
        'Electronic Device' => 'Command/ElectronicDevice/client.php'
    ],
    'Composite' => [
        'Songs' => 'Composite/Songs/client.php'
    ],
    'Decorator' => [
        'Sandwich' => 'Decorator/Sandwich/client.php'
    ],
    'Facade' => [
        'Bank Account' => 'Facade/BankAccount/client.php'
    ],
    'Factory' => [
        'Enemy Ship' => 'Factory/EnemyShip/client.php'
    ],
    'Flyweight' => [
        'Shapes' => 'Flyweight/Shapes/client.php'
    ],
    'Interpreter' => [
        'Units' => 'Interpreter/Units/client.php'
    ],
    'Iterator' => [
        'Songs' => 'Iterator/Songs/client.php'
    ],
    'Model View Controller (MVC)' => [
        'Calculator' => 'MVC/Calculator/client.php'
    ],
    'Observer' => [
        'Stock' => 'Observer/Stock/client.php'
    ] ,
    'Singleton' => [
        'Database Manager' => 'Singleton/DatabaseManager/client.php'
    ] ,
    'Strategy' => [
        'Compression' => 'Strategy/Compression/client.php'
    ],
    'Template Method' => [
        'Sandwich' => 'TemplateMethod/Sandwich/client.php'
    ]
];

echo '<h1>Design Patterns</h1>';
echo '<ul>';
foreach ($clients as $patternName => $examples) {
    echo '<li>';
        echo '<h3>'.$patternName.'</h3>';
        echo '<ul>';
        foreach ($examples as $name => $client) {
            echo '<li><a target="_blank" href="'.$client.'">'.$name.'</a></li>';
        }
        echo '</ul>';
    echo '</li>';
}
echo '</ul>';