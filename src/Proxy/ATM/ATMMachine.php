<?php

namespace DesignPatterns\Proxy\ATM;

class ATMMachine implements GetATMData
{
    private HasCard $hasCard;
    private NoCard $noCard;
    private HasPin $hasCorrectPin;
    private NoCash $atmOutOfMoney;

    private ATMState $atmState;

    private int $cashInMachine = 2000;
    public bool $correctPinEntered = false;

    public function __construct()
    {
        $this->hasCard = new HasCard($this);
        $this->noCard = new NoCard($this);
        $this->hasCorrectPin = new HasPin($this);
        $this->atmOutOfMoney = new NoCash($this);

        $this->setATMState($this->noCard);

        if($this->cashInMachine <= 0) {
            $this->setATMState($this->atmOutOfMoney);
        }
    }

    public function setATMState(ATMState $atmState): void
    {
        $this->atmState = $atmState;
    }

    public function setCashInMachine(int $cashInMachine): void
    {
        $this->cashInMachine = $cashInMachine;
    }

    public function insertCard(): void
    {
        $this->atmState->insertCard();
    }

    public function ejectCard(): void
    {
        $this->atmState->ejectCard();
    }

    public function requestCash($cashToWithdraw): void
    {
        $this->atmState->requestCash($cashToWithdraw);
    }

    public function insertPin($pinEntered): void
    {
        $this->atmState->insertPin($pinEntered);
    }

    public function getHasCardState(): HasCard
    {
        return $this->hasCard;
    }

    public function getNoCardState(): NoCard
    {
        return $this->noCard;
    }

    public function getHasPin(): HasPin
    {
        return $this->hasCorrectPin;
    }

    public function getNoCashState(): NoCash
    {
        return $this->atmOutOfMoney;
    }

    public function getATMData(): ATMState
    {
        return $this->atmState;
    }

    public function getCashInMachine(): int
    {
        return $this->cashInMachine;
    }
}