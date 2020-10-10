<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Observer\Stock\StockGrabber;
use DesignPatterns\Observer\Stock\StockItem;
use DesignPatterns\Observer\Stock\StockObserver;

$stockGrabber = new StockGrabber();

$observer = new StockObserver($stockGrabber);

$googleStock = new StockItem('GOOGLE', 676.40);
$stockGrabber->setStockItem($googleStock);

$appleStock = new StockItem('APPLE', 589.60);
$stockGrabber->setStockItem($appleStock);

$ibmStock = new StockItem('IBM', 205.00);
$stockGrabber->setStockItem($ibmStock);

$observer->printStockPrices();


