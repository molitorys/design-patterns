<?php

namespace DesignPatterns\Observer\Stock;

class StockItem
{
    private string $symbol;

    private float $price;

    public function __construct(string $symbol, float $price)
    {
        $this->setSymbol($symbol);
        $this->setPrice($price);
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    private function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
    
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}