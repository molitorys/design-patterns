<?php

use PHPUnit\Framework\TestCase;

use DesignPatterns\Facade\BankAccount\FundsCheck;

class FundsCheckTest extends TestCase
{
    private $fundsCheck;

    public function setUp()
    {
        $this->fundsCheck = new FundsCheck();   
    }

    /** @test */
    public function cash_can_be_added_into_account()
    {        
        $this->fundsCheck->increaseCashInAccount(1000.00);
        $this->assertEquals(1000.00, $this->fundsCheck->getCashInAccount());
    }

    /** @test */
    public function cash_can_be_decreased_from_account()
    {        
        $this->fundsCheck->increaseCashInAccount(1000.00);
        $this->fundsCheck->decreaseCashInAccount(200.00);

        $this->assertEquals(800.00, $this->fundsCheck->getCashInAccount());

        $this->fundsCheck->decreaseCashInAccount(150.00);

        $this->assertEquals(650.00, $this->fundsCheck->getCashInAccount());
    }

    /** @test */
    public function cash_in_account_cannot_be_decreased_below_zero()
    {        
        $this->fundsCheck->increaseCashInAccount(1000.00);
        $this->fundsCheck->decreaseCashInAccount(2000.00);

        $this->assertEquals(0.00, $this->fundsCheck->getCashInAccount());
    }

    /** @test */
    public function cach_amount_in_account_can_be_checked()
    {        
        $this->fundsCheck->increaseCashInAccount(1000.00);
        
        $this->assertTrue($this->fundsCheck->haveEnoughMoney(800));
        $this->assertFalse($this->fundsCheck->haveEnoughMoney(1200));
    }    
}