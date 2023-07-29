<?php

namespace DesignPatterns\Mediator\Stock;

class JTPoorman extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
        echo 'JT Poorman signed up for exchange <br />';
    }
}