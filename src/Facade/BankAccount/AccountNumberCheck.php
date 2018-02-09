<?php
namespace DesignPatterns\Facade\BankAccount;

/**
 * Class check if account number is active
 */
class AccountNumberCheck
{
  private $accountNumber = '123456789';

  public function getAccountNumber()
  {
    return $this->accountNumber;
  }

  public function accountActive($accountNumberToCheck)
  {
    if($accountNumberToCheck == $this->getAccountNumber()) {
      return true;
    }

    return false;
  }
}
