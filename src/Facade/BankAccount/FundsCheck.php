<?php

namespace DesignPatterns\Facade\BankAccount;

/**
 * Class which controlls clients funds
 */
class FundsCheck
{
  private $cashInAccount = 0.00;

  public function getCashInAccount(): float
  {
    return $this->cashInAccount;
  }

  public function decreaseCashInAccount($cashWithdrawn): void
  {
    $this->cashInAccount -= $cashWithdrawn;

    if($this->cashInAccount < 0.00) {
      $this->cashInAccount = 0.00;      
    }
  }

  public function increaseCashInAccount($cashDeposit): void
  {
    $this->cashInAccount += $cashDeposit;
  }

  public function haveEnoughMoney($cashToWithdrawal): bool
  {
    if($cashToWithdrawal > $this->getCashInAccount()) {
      echo 'Błąd. Brak wystarczającej ilości środków na koncie'.PHP_EOL;
      echo 'Aktualny stan konta: '.$this->getCashInAccount().PHP_EOL;
      return false;
    }

    return true;
  }

  public function makeWithdrawn($cashToWithdrawal): void
  {
    $this->decreaseCashInAccount($cashToWithdrawal);
    echo 'Wypłata zakonczona: Aktualny stan konta wynosi '.$this->getCashInAccount().PHP_EOL;
  }

  public function makeDeposit($cashToDeposit): void
  {
    $this->increaseCashInAccount($cashToDeposit);
    echo 'Wpłata zakomczona: Aktualny stan konta wynosi '.$this->getCashInAccount().PHP_EOL;
  }
}
