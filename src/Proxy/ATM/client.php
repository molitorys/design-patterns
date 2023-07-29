<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Proxy\ATM\ATMMachine;
use DesignPatterns\Proxy\ATM\ATMProxy;

$atmMachine = new ATMMachine();

$atmMachine->insertCard();
$atmMachine->ejectCard();
$atmMachine->insertCard();
$atmMachine->insertPin(1234);
$atmMachine->requestCash(2000);
$atmMachine->insertCard();
$atmMachine->insertPin(1234);

$realATMMachine = new ATMMachine();
$atmProxy = new ATMProxy();

echo '<br /> Current ATM State: '.$atmProxy->getATMData();
echo '<br /> Cash in ATM Machine: '.$atmProxy->getCashInMachine();