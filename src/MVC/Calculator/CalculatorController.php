<?php

namespace DesignPatterns\MVC\Calculator;

class CalculatorController
{
    private CalculatorView $view;
    private CalculatorModel $model;

    public function __construct(CalculatorView $view, CalculatorModel $model)
    {
        $this->view = $view;
        $this->model = $model;
    }

    public function action(): void
    {
        $firstNumber = $this->view->getFirstNumber();
        $secondNumber = $this->view->getSecondNumber();

        $this->model->addTwoNumbers($firstNumber, $secondNumber);

        $this->view->setCalcSolution($this->model->getCalculationValue());

        $this->view->display();
    }
}