<?php

namespace DesignPatterns\Facade\BankAccount;

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

  public function __construct(string $accountNumber, string $securityCode)
  {
    $this->accountNumber = $accountNumber;
    $this->securityCode = $securityCode;

    $this->bankWelcome = new WelcomeToBank();
    $this->bankWelcome->welcomeClients();

    $this->accountChecker = new AccountNumberCheck();
    $this->codeChecker = new SecurityCodeCheck();
    $this->fundChecker = new FundsCheck();
  }

  public function getAccountNumber(): string
  {
    return $this->accountNumber;
  }

  public function getSecurityCode(): string
  {
    return $this->securityCode;
  }

  public function withdrawCash($cashToGet): void
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

  public function depositCash($cashToDeposit): void
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
