<?php

namespace DesignPatterns\Memento\Article;

class Originator
{
    private string $article;

    public function set(string $article): void
    {
        echo 'From Originator: Current Version of Article <br /> '.$article.'<br />';
        $this->article = $article;
    }

    public function storeInMemento(): Memento
    {
        echo 'From Originator: Saving to Memento';

        return new Memento($this->article);
    }

    public function restoreFromMemento(Memento $memento): string
    {
        $this->article = $memento->getSavedArticle();

        echo 'From Originator: Previous Article Saved in Memento <br />'.$this->article.'<br />';

        return $this->article;
    }
}