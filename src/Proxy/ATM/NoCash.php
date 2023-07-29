<?php

namespace DesignPatterns\Proxy\ATM;

class NoCash implements ATMState
{
    private ATMMachine $atmMachine;

    public function __construct(ATMMachine $atmMachine)
    {
        $this->atmMachine = $atmMachine;
    }

    public function insertCard(): void
    {
        echo 'We dont have money <br />';
    }

    public function ejectCard(): void
    {
        echo 'We dont have money, you didnt enter a card <br />';
    }

    public function insertPin($pinEntered): void
    {
        echo 'We dont have money <br />';
    }

    public function requestCash($cashToWithdraw): void
    {
        echo 'We dont have money <br />';
    }

    public function __toString(): string
    {
        return 'No Cash';
    }
}