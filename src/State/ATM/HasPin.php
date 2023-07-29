<?php

namespace DesignPatterns\State\ATM;

class HasPin implements ATMState
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
        echo 'Already entered PIN <br />';
    }

    public function requestCash($cashToWithdraw): void
    {
        if ($cashToWithdraw > $this->atmMachine->getCashInMachine()) {
            echo 'Dont have enough cash <br />';
            echo 'Card Ejected <br />';
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
        } else {
            echo $cashToWithdraw.' is provided by the machine <br />';
            $this->atmMachine->setCashInMachine($this->atmMachine->getCashInMachine() - $cashToWithdraw);
            echo 'Card Ejected <br />';
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());

            if ($this->atmMachine->getCashInMachine() <= 0) {
                $this->atmMachine->setATMState($this->atmMachine->getNoCashState());
            }
        }
    }
}