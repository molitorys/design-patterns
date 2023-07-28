<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Interpreter\Units\ConversionContext;

$questionAsked = '2 quarts to cups';

$question = new ConversionContext($questionAsked);

$fromConversion = $question->getFromConversion();
$toConversion = $question->getToConversion();
$quantity = $question->getQuantity();

$expressionClass = 'DesignPatterns\Interpreter\Units\\'.$fromConversion.'Expression';
$expression = new $expressionClass();
$toQuantity = $expression->$toConversion($quantity);

$answerToQuestion = $question->getResponse() . $toQuantity . ' ' . $toConversion;

echo $answerToQuestion;
