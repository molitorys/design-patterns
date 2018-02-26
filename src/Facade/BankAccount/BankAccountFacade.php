<?php
namespace DesignPatterns\Facade\BankAccount;

use DesignPatterns\Facade\BankAccount\WelcomeToBank;
use DesignPatterns\Facade\BankAccount\AccountNumberCheck;
use DesignPatterns\Facade\BankAccount\SecurityCodeCheck;
use DesignPatterns\Facade\BankAccount\FundsCheck;

/**
 * Bank account facade class - allows to perform client operations
 */
class BankAccountFacade
{
  private $accountNumber;
  private $securityCode;

  private $accountChecker;
  private $codeChecker;
  private $fundChecker;

  private $bankWelcome;

  public function __construct($accountNumber, $securityCode)
  {
    $this->accountNumber = $accountNumber;
    $this->securityCode = $securityCode;

    $this->bankWelcome = new WelcomeToBank();
    $this->accountChecker = new AccountNumberCheck();
    $this->codeChecker = new SecurityCodeCheck();
    $this->fundChecker = new FundsCheck();
    $this->fundChecker->addCashInAccount(1000.00);
  }

  public function getAccountNumber()
  {
    return $this->accountNumber;
  }

  public function getSecurityCode()
  {
    return $this->securityCode;
  }

  public function withdrawCash($cashToGet)
  {
    if($this->accountChecker->accountActive($this->getAccountNumber())
        && $this->codeChecker->isCodeCorrect($this->getSecurityCode())
        && $this->fundChecker->haveEnoughMoney($cashToGet)) {

          $this->fundChecker->makeWithdrawn($cashToGet);

          echo 'Transakcja zakonczona'.PHP_EOL;

    } else {
          echo 'Transakcja nie powiodła się'.PHP_EOL;
    }
  }

  public function depositCash($cashToDeposit)
  {
    if($this->accountChecker->accountActive($this->getAccountNumber())
        && $this->codeChecker->isCodeCorrect($this->getSecurityCode())) {

          $this->fundChecker->makeDeposit($cashToDeposit);

          echo 'Transakcja zakonczona'.PHP_EOL;

    } else {
          echo 'Transakcja nie powiodła się'.PHP_EOL;
    }
  }
}
