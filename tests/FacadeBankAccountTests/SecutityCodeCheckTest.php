<?php

use PHPUnit\Framework\TestCase;

use DesignPatterns\Facade\BankAccount\SecurityCodeCheck;

class SecurityCodeCheckTest extends TestCase
{
    private $securityCode;

    public function setUp()
    {
        $this->securityCode = new SecurityCodeCheck();   
    }

    /** @test */
    public function bank_returns_security_code()
    {        
        $this->assertEquals('1234',  $this->securityCode->getSecurityCode());
    }

    /** @test */
    public function bank_checks_security_code()
    {        
        $this->assertTrue($this->securityCode->isCodeCorrect('1234'));
        $this->assertFalse($this->securityCode->isCodeCorrect('12345'));
    }

    /** @test */
    public function bank_checks_empty_security_code()
    {        
        $this->assertFalse($this->securityCode->isCodeCorrect(''));
    }
}