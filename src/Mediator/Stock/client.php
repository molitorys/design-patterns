<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Mediator\Stock\GormanSlacks;
use DesignPatterns\Mediator\Stock\JTPoorman;
use DesignPatterns\Mediator\Stock\StockMediator;

$mediator = new StockMediator();

$broker1 = new GormanSlacks($mediator);
$broker2 = new JTPoorman($mediator);

$broker1->saleOffer('MSFT', 100);
$broker1->saleOffer('GOOG', 50);

$broker2->buyOffer('MSFT', 100);
$broker2->saleOffer('NRG', 10);

$broker1->buyOffer('NRG', 10);

$mediator->getStockOfferings();