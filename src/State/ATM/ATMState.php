<?php

namespace DesignPatterns\State\ATM;

interface ATMState
{
    public function insertCard(): void;
    public function ejectCard(): void;
    public function insertPin($pinEntered): void;
    public function requestCash($cashToWithdraw): void;
}