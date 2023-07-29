<?php

namespace DesignPatterns\Mediator\Stock;

abstract class Colleague
{
    private Mediator $mediator;
    private int $colleagueCode;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
        $this->mediator->addColleague($this);
    }

    public function saleOffer($stock, $shares): void
    {
        $this->mediator->saleOffer($stock, $shares, $this->colleagueCode);
    }

    public function buyOffer($stock, $shares): void
    {
        $this->mediator->buyOffer($stock, $shares, $this->colleagueCode);
    }

    public function setColleagueCode($collCode): void
    {
        $this->colleagueCode = $collCode;
    }
}