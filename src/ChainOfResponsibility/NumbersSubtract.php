<?php
namespace DesignPatterns\Adapter\ChainOfResponsibility;

use DesignPatterns\Adapter\ChainOfResponsibility\Chain;

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
