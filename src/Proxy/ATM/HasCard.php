<?php

namespace DesignPatterns\Proxy\ATM;

class HasCard implements ATMState
{
    private ATMMachine $atmMachine;

    public function __construct(ATMMachine $atmMachine)
    {
        $this->atmMachine = $atmMachine;
    }

    public function insertCard(): void
    {
        echo 'You cannot enter more than one card <br />';
    }

    public function ejectCard(): void
    {
        echo 'Card Ejected <br />';
        $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
    }

    public function insertPin($pinEntered): void
    {
        if($pinEntered == 1234) {
            echo 'Correct PIN <br />';
            $this->atmMachine->correctPinEntered = true;
            $this->atmMachine->setATMState($this->atmMachine->getHasPin());
        } else {
            echo 'Wrong PIN <br />';
            $this->atmMachine->correctPinEntered = false;
            echo 'Card Ejected <br />';
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
        }
    }

    public function requestCash($cashToWithdraw): void
    {
        echo 'Enter PIN first <br />';
    }

    public function __toString(): string
    {
        return 'Has Card';
    }
}