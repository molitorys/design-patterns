<?php

namespace DesignPatterns\Proxy\ATM;

interface GetATMData
{
    public function getATMData(): ATMState;
    public function getCashInMachine(): int;
}