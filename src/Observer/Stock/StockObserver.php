<?php

namespace DesignPatterns\Observer\Stock;

class StockObserver implements ObserverInterface
{
    private static int $observerIdTracker = 0;

    private int $observerId;

    private SubjectInterface $stockGrabber;

    private array $stockItems;

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