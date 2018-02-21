<?php
namespace DesignPatterns\Facade\BankAccount;

/**
 * Basic class which will welcome bank client
 */
class WelcomeToBank
{
    private $welcome;

    public function __construct()
    {
        $this->welcome = 'Witamy w banku ABC S.A.';
    }

    public function welcomeClients()
    {
        return $this->welcome;
    }
}
