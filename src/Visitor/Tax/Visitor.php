<?php

namespace DesignPatterns\Visitor\Tax;

interface Visitor
{
    public function visitLiquor(Liquor $liquorItem): float;
    public function visitTabacco(Tabacco $tabaccoItem): float;
    public function visitNecessity(Necessity $necessityItem): float;
}