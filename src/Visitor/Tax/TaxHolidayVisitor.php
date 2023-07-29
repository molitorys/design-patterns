<?php

namespace DesignPatterns\Visitor\Tax;

class TaxHolidayVisitor implements Visitor
{
    public function visitLiquor(Liquor $liquorItem): float
    {
        echo 'Liquor Item: Price with tax ';
        return $liquorItem->getPrice() * 1.10;
    }

    public function visitTabacco(Tabacco $tabaccoItem): float
    {
        echo 'Tabacco Item: Price with tax ';
        return $tabaccoItem->getPrice() * 1.30;
    }

    public function visitNecessity(Necessity $necessityItem): float
    {
        echo 'Necessity Item: Price with tax ';
        return $necessityItem->getPrice() * 1.00;
    }
}