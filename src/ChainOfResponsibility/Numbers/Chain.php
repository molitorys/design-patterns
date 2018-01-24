<?php
namespace DesignPatterns\ChainOfResponsibility\Numbers;

/**
 * Abstract chain class, extended by chain link
 */
abstract class Chain 
{
    protected $nextChainElement;
    
    public function setNextChainElement(Chain $nextChainElement)
    {
        $this->nextChainElement = $nextChainElement;
    }
    
    public abstract function calculate(Numbers $request);
}

