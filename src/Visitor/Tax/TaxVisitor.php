<?php

namespace DesignPatterns\Visitor\Tax;

class TaxVisitor implements Visitor
{
    public function visitLiquor(Liquor $liquorItem): float
    {
        echo 'Liquor Item: Price with tax ';
        return $liquorItem->getPrice() * 1.18;
    }

    public function visitTabacco(Tabacco $tabaccoItem): float
    {
        echo 'Tabacco Item: Price with tax ';
        return $tabaccoItem->getPrice() * 1.32;
    }

    public function visitNecessity(Necessity $necessityItem): float
    {
        echo 'Necessity Item: Price with tax ';
        return $necessityItem->getPrice() * 1.05;
    }
}