<?php

namespace DesignPatterns\ChainOfResponsibility\Numbers;

/**
 * Multiply numbers chain link class
 */
class NumbersMultiply extends Chain
{
    public function calculate(Numbers $request): ?float
    {
        if($request->getCalcType() == 'mul') {
            $result = $request->getNum1() * $request->getNum2();
            echo 'Mnożenie: '.$request->getNum1().' * '.$request->getNum2().' = '.$result;
            return $result;
        }
        
        return $this->nextChainElement->calculate($request);
    }
}
