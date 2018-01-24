<?php
namespace DesignPatterns\Adapter\ChainOfResponsibility;

use DesignPatterns\Adapter\ChainOfResponsibility\Chain;

/**
 * Add numbers chain link class
 */
class NumbersAdd extends Chain
{
    public function calculate(Numbers $request)
    {
        if($request->getCalcType() == 'add') {
            $result = $request->getNum1() + $request->getNum2();
            echo 'Dodawanie: '.$request->getNum1().' + '.$request->getNum2().' = '.$result;
            return $result;
        }
        
        $this->nextChainElement->calculate($request);
    }
}
