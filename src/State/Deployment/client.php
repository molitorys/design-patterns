<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\State\Deployment\DeploymentManager;

$manager = new DeploymentManager();
$manager->deploy(); // Output: Deployment is pending.
$manager->deploy(); // Output: Deploying...
$manager->deploy(); // Output: Deployment is successful.