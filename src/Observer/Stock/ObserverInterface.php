<?php

namespace DesignPatterns\Observer\Stock;

interface ObserverInterface
{
    /**
     * Actualize observer state.
     */
    public function update(array $stockItems): void;
}