<?php

namespace DesignPatterns\Facade\BankAccount;

/**
 * Basic class which will welcome bank client
 */
class WelcomeToBank
{
    private string $welcome;

    public function __construct()
    {
        $this->welcome = 'Witamy w banku ABC S.A.';
    }

    public function welcomeClients(): ?string
    {
        return $this->welcome;
    }
}
