<?php

namespace DesignPatterns\Adapter\MathSystem;

use DesignPatterns\Adapter\MathSystem\MathSystemAdapter\MathSystemAdapter;

class MathSystem
{
    protected MathSystemAdapter $adapter;

    public function __construct(MathSystemAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function add(float $a, float $b, int $precision = 0): float
    {
        $this->isPrecisionValid($precision);
        return $this->adapter->add($a, $b, $precision);
    }

    public function sub(float $a, float $b, int $precision = 0)
    {
        $this->isPrecisionValid($precision);
        return $this->adapter->sub($a, $b, $precision);
    }

    public function mul(float $a, float $b, int $precision = 0)
    {
        $this->isPrecisionValid($precision);
        return $this->adapter->mul($a, $b, $precision);
    }

    public function div(float $a, float $b, int $precision = 0)
    {
        if($b == 0) {
            throw new \Exception('Divide by zero is not allowed.');
        }

        $this->isPrecisionValid($precision);
        return $this->adapter->div($a, $b, $precision);
    }

    public function rou(float $a, int $precision = 0)
    {
        $this->isPrecisionValid($precision);
        return $this->adapter->rou($a, $precision);
    }

    private function isPrecisionValid(int $precision): void
    {
        if ($precision < 0) {
            throw new \Exception('Precision cannot be nagative.');
        }
    }
}