<?php

namespace DesignPatterns\ChainOfResponsibility\Numbers;

/**
 * Subtract numbers chain link class
 */
class NumbersSubtract extends Chain
{
    public function calculate(Numbers $request): ?float
    {
        if($request->getCalcType() == 'sub') {
            $result = $request->getNum1() - $request->getNum2();
            echo 'Odejmowanie: '.$request->getNum1().' - '.$request->getNum2().' = '.$result;
            return $result;
        }
        
        return $this->nextChainElement->calculate($request);
    }
}
