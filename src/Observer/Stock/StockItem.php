<?php

namespace DesignPatterns\Observer\Stock;

class StockItem
{
    /**
     * @var string
     */
    private $symbol;

    /**
     * @var float
     */
    private $price;

    /**
     * StockItem constructor.
     *
     * @param string $symbol
     * @param float $price
     */
    public function __construct(string $symbol, float $price)
    {
        $this->setSymbol($symbol);
        $this->setPrice($price);
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    private function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}