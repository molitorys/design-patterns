<?php

namespace DesignPatterns\Observer\Stock;

interface SubjectInterface
{
    /**
     * @param ObserverInterface $observer
     * @return void
     */
    public function register(ObserverInterface $observer): void;

    /**
     * @param ObserverInterface $observer
     * @return void
     */
    public function unregister(ObserverInterface $observer): void;

    /**
     * @return void
     */
    public function notifyObserver(): void;
}