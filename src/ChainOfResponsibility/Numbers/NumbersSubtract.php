<?php
namespace DesignPatterns\ChainOfResponsibility\Numbers;

use DesignPatterns\ChainOfResponsibility\Numbers\Chain;

/**
 * Subtract numbers chain link class
 */
class NumbersSubtract extends Chain
{
    public function calculate(Numbers $request)
    {
        if($request->getCalcType() == 'sub') {
            $result = $request->getNum1() - $request->getNum2();
            echo 'Odejmowanie: '.$request->getNum1().' - '.$request->getNum2().' = '.$result;
            return $result;
        }
        
        $this->nextChainElement->calculate($request);
    }
}
