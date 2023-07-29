<?php

namespace DesignPatterns\Visitor\Tax;

interface Visitable
{
    public function accept(Visitor $visitor): float;
}