<?php

namespace DesignPatterns\Adapter\MathSystem\MathSystemAdapter;

class BC implements MathSystemAdapter
{
    const PRECISION_SHIFT = 4;

    public function add(float $a, float $b, int $precision = 0): float
    {
        $res = (float) bcadd($a, $b, $precision + self::PRECISION_SHIFT);
        return $this->rou($res, $precision);
    }

    public function sub(float $a, float $b, int $precision = 0): float
    {
        $res = (float) bcsub($a, $b, $precision + self::PRECISION_SHIFT);
        return $this->rou($res, $precision);
    }

    public function mul(float $a, float $b, int $precision = 0): float
    {
        $res = (float) bcmul($a, $b, $precision + self::PRECISION_SHIFT);
        return $this->rou($res, $precision);
    }

    public function div(float $a, float $b, int $precision = 0): float
    {
        $res = (float) bcdiv($a, $b, $precision + self::PRECISION_SHIFT);
        return $this->rou($res, $precision);
    }

    public function rou(float $a, int $precision = 0): float
    {
        $a = (float) bcadd($a, 0, $precision + self::PRECISION_SHIFT);

        list($decimal_separator) = array_values(localeconv());

        if(str_contains($a, $decimal_separator)) {
            list($int, $dec) = explode($decimal_separator, $a);
        } else {
            return $a;
        }

        $decEnd = substr($dec, $precision, self::PRECISION_SHIFT);
        $dec = substr($dec, 0, $precision);

        $decEndRou = round('0'.$decimal_separator.$decEnd, 0, PHP_ROUND_HALF_DOWN);

        if($precision > 0) {
            $to_add = '0'.$decimal_separator.str_repeat('0', $precision-1).$decEndRou;
        } else {
            $to_add = $decEndRou;
        }

        return (float) bcadd($int.'.'.$dec, $to_add, $precision);
    }
}