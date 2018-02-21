<?php

use PHPUnit\Framework\TestCase;

use DesignPatterns\Facade\BankAccount\AccountNumberCheck;

class AccountNumberCheckTest extends TestCase
{
    private $accountSecurity;

    public function setUp()
    {
        $this->accountSecurity = new AccountNumberCheck();   
    }

    /** @test */
    public function bank_returns_account_number()
    {        
        $this->assertEquals('123456789',  $this->accountSecurity->getAccountNumber());
    }

    /** @test */
    public function bank_checks_if_account_is_active()
    {        
        $this->assertTrue($this->accountSecurity->accountActive('123456789'));
        $this->assertFalse($this->accountSecurity->accountActive('768468326'));
    }
}