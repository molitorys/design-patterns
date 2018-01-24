<?php
namespace DesignPatterns\ChainOfResponsibility\Numbers;

use DesignPatterns\ChainOfResponsibility\Numbers\Chain;

/**
 * Divide numbers chain link class
 */
class NumbersDivide extends Chain
{
    public function calculate(Numbers $request)
    {
        if($request->getCalcType() == 'div') {
            $result = $request->getNum1() / $request->getNum2();
            echo 'Dzielenie: '.$request->getNum1().' / '.$request->getNum2().' = '.$result;
            return $result;
        }
        
        echo 'Koniec operacji';
    }
}
