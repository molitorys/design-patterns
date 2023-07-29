<?php

namespace DesignPatterns\Mediator\Stock;

interface Mediator
{
    public function saleOffer($stock, $shares, $collCode): void;
    public function buyOffer($stock, $shares, $collCode): void;
    public function addColleague(Colleague $newColleague): void;
}
