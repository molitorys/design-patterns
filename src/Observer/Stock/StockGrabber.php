<?php

namespace DesignPatterns\Observer\Stock;

class StockGrabber implements SubjectInterface
{
    private array $observers;
    private array $stockItems;

    public function __construct()
    {
        $this->observers = [];
        $this->stockItems = [];
    }

    public function register(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function unregister(ObserverInterface $observer): void
    {
        $observerIndex = array_search($observer, $this->observers);
        if ($observerIndex) {
            unset($this->observers[$observerIndex]);
        }
    }

    public function notifyObserver(): void
    {
        /** @var ObserverInterface $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this->stockItems);
        }
    }

    /**
     * Add stock item to the list.
     */
    public function setStockItem(StockItem $stockItem): void
    {
        $this->stockItems[$stockItem->getSymbol()] = $stockItem;
        $this->notifyObserver();
    }
}