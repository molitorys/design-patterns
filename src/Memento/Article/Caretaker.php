<?php

namespace DesignPatterns\Memento\Article;

class Caretaker
{
    private array $savedArticles = [];

    public function addMemento(Memento $memento): void
    {
        $this->savedArticles[] = $memento;
    }

    public function getMemento($index): Memento
    {
        return $this->savedArticles[$index];
    }
}