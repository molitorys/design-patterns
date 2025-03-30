<?php

namespace DesignPatterns\Adapter\MathSystem\MathSystemAdapter;

class Native implements MathSystemAdapter
{
    public function add(float $a, float $b, int $precision = 0): float
    {
        return $this->rou($a + $b, $precision);
    }

    public function sub(float $a, float $b, int $precision = 0): float
    {
        return $this->rou($a - $b, $precision);
    }

    public function mul(float $a, float $b, int $precision = 0): float
    {
        return $this->rou($a * $b, $precision);
    }

    public function div(float $a, float $b, int $precision = 0): float
    {
        return $this->rou($a / $b, $precision);
    }

    public function rou(float $a, int $precision = 0): float
    {
        return round($a, $precision, PHP_ROUND_HALF_DOWN);
    }
}