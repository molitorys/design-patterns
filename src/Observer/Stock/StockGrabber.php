<?php

namespace DesignPatterns\Observer\Stock;

class StockGrabber implements SubjectInterface
{
    /**
     * @var array
     */
    private $observers;

    /**
     * @var array
     */
    private $stockItems;

    /**
     * StockGrabber constructor.
     */
    public function __construct()
    {
        $this->observers = [];
        $this->stockItems = [];
    }

    /**
     * @inheritDoc
     */
    public function register(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @inheritDoc
     */
    public function unregister(ObserverInterface $observer): void
    {
        $observerIndex = array_search($observer, $this->observers);
        if ($observerIndex) {
            unset($this->observers[$observerIndex]);
        }
    }

    /**
     * @inheritDoc
     */
    public function notifyObserver(): void
    {
        /**
         * @var ObserverInterface $observer
         */
        foreach ($this->observers as $observer) {
            $observer->update($this->stockItems);
        }
    }

    /**
     * Add stock item to the list.
     *
     * @param StockItem $stockItem
     */
    public function setStockItem(StockItem $stockItem): void
    {
        $this->stockItems[$stockItem->getSymbol()] = $stockItem;
        $this->notifyObserver();
    }
}