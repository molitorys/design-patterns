<?php

namespace DesignPatterns\Proxy\ATM;

class NoCard implements ATMState
{
    private ATMMachine $atmMachine;

    public function __construct(ATMMachine $atmMachine)
    {
        $this->atmMachine = $atmMachine;
    }

    public function insertCard(): void
    {
        echo 'Please enter a PIN <br />';
        $this->atmMachine->setATMState($this->atmMachine->getHasCardState());
    }

    public function ejectCard(): void
    {
        echo 'Enter a card first <br />';
    }

    public function insertPin($pinEntered): void
    {
        echo 'Enter a card first <br />';
    }

    public function requestCash($cashToWithdraw): void
    {
        echo 'Enter a card first <br />';
    }

    public function __toString(): string
    {
        return 'No Card';
    }
}