<?php

namespace DesignPatterns\Proxy\ATM;

class ATMProxy implements GetATMData
{
    public function getATMData(): ATMState
    {
        $realATMMachine = new ATMMachine();
        return $realATMMachine->getATMData();
    }

    public function getCashInMachine(): int
    {
        $realATMMachine = new ATMMachine();
        return $realATMMachine->getCashInMachine();
    }
}