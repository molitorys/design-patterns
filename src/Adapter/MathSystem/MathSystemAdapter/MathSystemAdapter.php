<?php

namespace DesignPatterns\Adapter\MathSystem\MathSystemAdapter;

interface MathSystemAdapter
{
    public function add(float $a, float $b, int $precision = 0): float;
    public function sub(float $a, float $b, int $precision = 0): float;
    public function mul(float $a, float $b, int $precision = 0): float;
    public function div(float $a, float $b, int $precision = 0): float;
    public function rou(float $a, int $precision = 0): float;
}