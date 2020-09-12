<?php

namespace DesignPatterns\ChainOfResponsibility\Numbers;

/**
 * Abstract chain class, extended by chain link
 */
abstract class Chain 
{
    /**
     * @var Chain
     */
    protected $nextChainElement;
    
    public function setNextChainElement(Chain $nextChainElement): void
    {
        $this->nextChainElement = $nextChainElement;
    }
    
    public abstract function calculate(Numbers $request);
}

