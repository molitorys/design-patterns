<?php
namespace DesignPatterns\Facade\BankAccount;

/**
 * Basic class which will welcome bank client
 */
class WelcomeToBank
{
  public function __construct()
  {
    echo 'Witamy w banku ABC S.A.';
    echo PHP_EOL;
  }
}
