<?php

namespace DesignPatterns\Adapter\MathSystem\MathSystemAdapter;

class WCalc implements MathSystemAdapter
{
    public function add(float $a, float $b, int $precision = 0): float
    {
        return (float) trim(str_replace(' = ', '', `wcalc -P$precision -d '$a + $b'`));
    }

    public function sub(float $a, float $b, int $precision = 0): float
    {
        return (float) trim(str_replace(' = ', '', `wcalc -P$precision -d '$a - $b'`));
    }

    public function mul(float $a, float $b, int $precision = 0): float
    {
        return (float) trim(str_replace(' = ', '', `wcalc -P$precision -d '$a * $b'`));
    }

    public function div(float $a, float $b, int $precision = 0): float
    {
        return (float) trim(str_replace(' = ', '', `wcalc -P$precision -d '$a / $b'`));
    }

    public function rou(float $a, int $precision = 0): float
    {
        return (float) trim(str_replace(' = ', '', `wcalc -P$precision -d '$a + 0'`));
    }
}