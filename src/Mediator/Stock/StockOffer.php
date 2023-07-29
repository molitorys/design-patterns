<?php

namespace DesignPatterns\Mediator\Stock;

class StockOffer
{
    private string $stockSymbol = '';
    private int $stockShares = 0;
    private int $colleagueCode = 0;

    public function __construct(string $stockSymbol, int $stockShares, int $colleagueCode)
    {
        $this->stockSymbol = $stockSymbol;
        $this->stockShares = $stockShares;
        $this->colleagueCode = $colleagueCode;
    }

    public function getStockShares(): int
    {
        return $this->stockShares;
    }

    public function getStockSymbol(): string
    {
        return $this->stockSymbol;
    }

    public function getColleagueCode(): int
    {
        return $this->colleagueCode;
    }
}