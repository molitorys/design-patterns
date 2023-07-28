<?php

namespace DesignPatterns\Memento\Article;

class Memento
{
    private string $article;

    public function __construct(string $article)
    {
        $this->article = $article;
    }

    public function getSavedArticle(): string
    {
        return $this->article;
    }
}