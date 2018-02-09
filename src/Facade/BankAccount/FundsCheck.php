<?php
namespace DesignPatterns\Facade\BankAccount;

/**
 * Class which controlls clients funds
 */
class FundsCheck
{
  private $cashInAccount = 1000.00;

  public function getCashInAccount()
  {
    return $this->cashInAccount;
  }

  public function decreaseCashInAccount($cashWithdrawn)
  {
    $this->cashInAccount -= $cashWithdrawn;
  }

  public function increaseCashInAccount($cashDeposit)
  {
    $this->cashInAccount += $cashDeposit;
  }

  public function haveEnoughMoney($cashToWithdrawal)
  {
    if($cashToWithdrawal > $this->getCashInAccount()) {
      echo 'Błądd. Brak wystarczającej ilości środków na koncie'.PHP_EOL;
      echo 'Aktualny stan konta: '.$this->getCashInAccount().PHP_EOL;
      return false;
    }

    return true;
  }

  public function makeWithdrawn($cashToWithdrawal)
  {
    $this->decreaseCashInAccount($cashToWithdrawal);
    echo 'Wypłata zakonczona: Aktualny stan konta wynosi '.$this->getCashInAccount().PHP_EOL;
  }

  public function makeDeposit($cashToDeposit)
  {
    $this->increaseCashInAccount($cashToDeposit);
    echo 'Wpłata zakomczona: Aktualny stan konta wynosi '.$this->getCashInAccount().PHP_EOL;
  }
}
