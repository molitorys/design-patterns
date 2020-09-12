<?php

namespace DesignPatterns\ChainOfResponsibility\Numbers;

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
