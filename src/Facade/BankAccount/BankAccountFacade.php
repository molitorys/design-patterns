<?php

namespace DesignPatterns\Facade\BankAccount;

/**
 * Bank account facade class - allows to perform client operations
 */
class BankAccountFacade
{
    private string $accountNumber;
    private string $securityCode;

    private WelcomeToBank $bankWelcome;

    private AccountNumberCheck $accountChecker;
    private SecurityCodeCheck $codeChecker;
    private FundsCheck $fundChecker;

    public function __construct(string $accountNumber, string $securityCode)
    {
        $this->accountNumber = $accountNumber;
        $this->securityCode = $securityCode;

        $this->bankWelcome = new WelcomeToBank();
        echo $this->bankWelcome->welcomeClients();

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
        if ($this->accountChecker->accountActive($this->getAccountNumber())
            && $this->codeChecker->isCodeCorrect($this->getSecurityCode())
            && $this->fundChecker->haveEnoughMoney($cashToGet)) {

            $this->fundChecker->makeWithdrawn($cashToGet);

            echo 'Transakcja zakonczona'.PHP_EOL;

            return;
        }

        echo 'Transakcja nie powiodła się'.PHP_EOL;
    }

    public function depositCash($cashToDeposit): void
    {
        if ($this->accountChecker->accountActive($this->getAccountNumber())
            && $this->codeChecker->isCodeCorrect($this->getSecurityCode())) {

            $this->fundChecker->makeDeposit($cashToDeposit);

            echo 'Transakcja zakonczona'.PHP_EOL;

            return;
        }

        echo 'Transakcja nie powiodła się'.PHP_EOL;
    }
}
