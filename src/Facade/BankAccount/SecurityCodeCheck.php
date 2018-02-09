<?php
namespace DesignPatterns\Facade\BankAccount;

/**
 * Class check if entered security code is correct
 */
class SecurityCodeCheck
{
  private $securityCode = '1234';

  public function getSecurityCode()
  {
    return $this->securityCode;
  }

  public function isCodeCorrect($securityCodeToCheck)
  {
    if($securityCodeToCheck == $this->getSecurityCode()) {
      return true;
    }

    return false;
  }
}
