<?php

namespace DesignPatterns\Observer\Stock;

interface SubjectInterface
{
    public function register(ObserverInterface $observer): void;

    public function unregister(ObserverInterface $observer): void;

    public function notifyObserver(): void;
}