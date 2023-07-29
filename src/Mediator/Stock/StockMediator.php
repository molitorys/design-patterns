<?php

namespace DesignPatterns\Mediator\Stock;

class StockMediator implements Mediator
{
    private array $colleagues;
    private array $stockBuyOffers;
    private array $stockSellOffers;

    private int $colleagueCode = 0;

    public function __construct()
    {
        $this->colleagues = [];
        $this->stockBuyOffers = [];
        $this->stockSellOffers = [];
    }

    public function addColleague(Colleague $colleague): void
    {
        $this->colleagues[] = $colleague;
        $this->colleagueCode++;
        $colleague->setColleagueCode($this->colleagueCode);
    }

    public function saleOffer($stock, $shares, $collCode): void
    {
        $stockSold = false;

        foreach ($this->stockBuyOffers as $index => $offer) {
            if ($offer->getStockSymbol() == $stock && $offer->getStockShares() == $shares) {
                echo $shares.' shares of '.$stock.' sold to colleague code '.$offer->getColleagueCode().'<br />';
                unset($this->stockBuyOffers[$index]);
                $stockSold = true;
            }

            if ($stockSold) {
                break;
            }
        }

        if (!$stockSold) {
            echo $shares.' shares of '.$stock.' added to inventory <br />';
            $newOffering = new StockOffer($stock, $shares, $collCode);
            $this->stockSellOffers[] = $newOffering;
        }
    }

    public function buyOffer($stock, $shares, $collCode): void
    {
        $stockBought = false;

        foreach ($this->stockSellOffers as $index => $offer) {
            if ($offer->getStockSymbol() == $stock && $offer->getStockShares() == $shares) {
                echo $shares.' shares of '.$stock.' bought by colleague code '.$offer->getColleagueCode().'<br />';
                unset($this->stockSellOffers[$index]);
                $stockBought = true;
            }

            if ($stockBought) {
                break;
            }
        }

        if (!$stockBought) {
            echo $shares.' shares of '.$stock.' added to inventory <br />';
            $newOffering = new StockOffer($stock, $shares, $collCode);
            $this->stockBuyOffers[] = $newOffering;
        }
    }

    public function getStockOfferings(): void
    {
        echo 'Stocks for sale <br />';
        foreach ($this->stockSellOffers as $offer) {
            echo $offer->getStockShares().' of  '.$offer->getStockSymbol().'<br />';
        }

        echo '<br /> Stocks for buy <br />';
        foreach ($this->stockBuyOffers as $offer) {
            echo $offer->getStockShares().' of  '.$offer->getStockSymbol().'<br />';
        }
    }
}