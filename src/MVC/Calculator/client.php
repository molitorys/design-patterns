<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\MVC\Calculator\CalculatorController;
use DesignPatterns\MVC\Calculator\CalculatorModel;
use DesignPatterns\MVC\Calculator\CalculatorView;

$view = new CalculatorView();
$model = new CalculatorModel();

$controller = new CalculatorController($view, $model);

$controller->action();