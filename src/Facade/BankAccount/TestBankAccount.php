<?php
require_once '../../../vendor/autoload.php';

use DesignPatterns\Facade\BankAccount\BankAccountFacade;

$accessingBank = new BankAccountFacade('123456789', '1234');

$accessingBank->withdrawCash(50.00);

$accessingBank->withdrawCash(900.00);

$accessingBank->depositCash(200.00);

$accessingBank->withdrawCash(400.00);
