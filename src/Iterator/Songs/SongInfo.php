<?php

namespace DesignPatterns\Iterator\Songs;

class SongInfo
{
    private string $name;
    private string $band;
    private int $yearReleased;

    public function __construct(string $name, string $band, int $yearReleased)
    {
        $this->name = $name;
        $this->band = $band;
        $this->yearReleased = $yearReleased;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBand(): string
    {
        return $this->band;
    }

    public function getYearReleased(): int
    {
        return $this->yearReleased;
    }
}