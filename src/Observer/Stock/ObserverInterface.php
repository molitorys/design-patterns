<?php

namespace DesignPatterns\Observer\Stock;

interface ObserverInterface
{
    /**
     * Actualize observer state.
     *
     * @param array $stockItems
     */
    public function update(array $stockItems): void;
}