<?php

use PHPUnit\Framework\TestCase;

use DesignPatterns\Facade\BankAccount\WelcomeToBank;

class WeolcomeToBankTest extends TestCase
{
    /** @test */
    public function bank_can_welcome_clients()
    {
        $bank = new WelcomeToBank();
        
        $this->assertEquals('Witamy w banku ABC S.A.', $bank->welcomeClients());
    }
}