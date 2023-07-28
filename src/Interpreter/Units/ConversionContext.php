<?php

namespace DesignPatterns\Interpreter\Units;

class ConversionContext
{
    private string $conversionQuestion = '';
    private string $conversionResponse = '';
    private string $fromConversion = '';
    private string $toConversion = '';
    private float $quantity;

    public array $partsOfQuestion = [];

    public function __construct($input)
    {
        $this->conversionQuestion = $input;
        $this->partsOfQuestion = explode(' ', $this->getInput());
        $this->fromConversion = $this->getCapitalized($this->partsOfQuestion[1]);
        $this->toConversion = $this->getLowercase($this->partsOfQuestion[3]);
        $this->quantity = doubleval($this->partsOfQuestion[0]);
        $this->conversionResponse = $this->partsOfQuestion[0].' '.$this->partsOfQuestion[1].' equals ';
    }

    public function getInput(): string
    {
        return $this->conversionQuestion;
    }

    public function getFromConversion(): string
    {
        return $this->fromConversion;
    }

    public function getToConversion(): string
    {
        return $this->toConversion;
    }

    public function getResponse(): string
    {
        return $this->conversionResponse;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function getCapitalized($wordToCapitalize): string
    {
        $wordToCapitalize = mb_strtolower($wordToCapitalize);
        $wordToCapitalize = ucfirst($wordToCapitalize);

        $lengthOfWord = mb_strlen($wordToCapitalize);
        if($wordToCapitalize[$lengthOfWord - 1] != 's') {
            $wordToCapitalize .= 's';
        }

        return $wordToCapitalize;
    }

    public function getLowercase($wordToLowercase): string
    {
        return mb_strtolower($wordToLowercase);
    }
}