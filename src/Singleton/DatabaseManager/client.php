<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Singleton\DatabaseManager\DatabaseConnector;

$databaseConnector = DatabaseConnector::getInstance();

echo '<br>';
$databaseConnector->executeQuery('SELECT * FROM users;');