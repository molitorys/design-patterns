<?php

namespace DesignPatterns\Facade\BankAccount;

/**
 * Class check if account number is active
 */
class AccountNumberCheck
{
  private $accountNumber = '123456789';

  public function getAccountNumber(): string
  {
    return $this->accountNumber;
  }

  public function accountActive($accountNumberToCheck): bool
  {
    return $accountNumberToCheck == $this->getAccountNumber();
  }
}
