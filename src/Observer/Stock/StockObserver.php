<?php

namespace DesignPatterns\Observer\Stock;

use DesignPatterns\Observer\Stock\StockItem\StockItem;

class StockObserver implements ObserverInterface
{
    /**
     * @var int
     */
    private static $observerIdTracker = 0;

    /**
     * @var int
     */
    private $observerId;

    /**
     * @var SubjectInterface
     */
    private $stockGrabber;

    /**
     * @var array
     */
    private $stockItems;

    public function __construct(SubjectInterface $stockGrabber)
    {
        $this->observerId = ++self::$observerIdTracker;
        $this->stockGrabber = $stockGrabber;
        $this->stockGrabber->register($this);
    }

    /**
     * @inheritDoc
     */
    public function update(array $stockItems): void
    {
        $this->stockItems = $stockItems;
    }

    /**
     * Display price of each stock item.
     */
    public function printStockPrices(): void
    {
        echo 'Stock Items: <br>';

        if (empty ($this->stockItems)) {
            echo '<p>--- no stock items set ---</p>';
            return;
        }

        echo '<ul>';
        /** @var StockItem $stockItem */
        foreach ($this->stockItems as $stockItem) {
            echo '<li>'.$stockItem->getSymbol().': '.$stockItem->getPrice().'</li>';
        }
        echo '</ul>';
    }
}