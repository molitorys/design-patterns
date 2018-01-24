<?php
require_once '../../../vendor/autoload.php';

use DesignPatterns\ChainOfResponsibility\Numbers\Numbers;
use DesignPatterns\ChainOfResponsibility\Numbers\NumbersAdd;
use DesignPatterns\ChainOfResponsibility\Numbers\NumbersSubtract;
use DesignPatterns\ChainOfResponsibility\Numbers\NumbersMultiply;
use DesignPatterns\ChainOfResponsibility\Numbers\NumbersDivide;

$chainAdd = new NumbersAdd();
$chainSubtract = new NumbersSubtract();
$chainMultiply = new NumbersMultiply();
$chainDivide = new NumbersDivide();

$chainAdd->setNextChainElement($chainSubtract);
$chainSubtract->setNextChainElement($chainMultiply);
$chainMultiply->setNextChainElement($chainDivide);

$request1 = new Numbers(4, 2, 'mul');
$chainAdd->calculate($request1);

$request2 = new Numbers(4, 2, 'sub');
$chainAdd->calculate($request2);
