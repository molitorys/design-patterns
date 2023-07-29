<?php

namespace DesignPatterns\Mediator\Stock;

class GormanSlacks extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
        echo 'Gorman Slacks signed up for exchange <br />';
    }
}