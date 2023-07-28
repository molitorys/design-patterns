<?php

namespace DesignPatterns\Composite\Songs;

class Song extends SongComponent
{
    private string $name;
    private string $band;
    private string $releaseYear;

    public function __construct(string $name, string $band, int $releaseYear)
    {
        $this->name = $name;
        $this->band = $band;
        $this->releaseYear = $releaseYear;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBand(): string
    {
        return $this->band;
    }

    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }

    public function displaySongInfo(): void
    {
        echo $this->getName().' was recorded by '.$this->getBand().' in '.$this->getReleaseYear();
    }
}