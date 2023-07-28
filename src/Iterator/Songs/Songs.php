<?php

namespace DesignPatterns\Iterator\Songs;

use ArrayObject;

abstract class Songs implements SongsIterator
{
    protected array $bestSongs = [];

    protected function addSong($name, $band, $yearReleased)
    {
        $this->bestSongs[] = new SongInfo($name, $band, $yearReleased);
    }

    public function createIterator(): \Iterator
    {
        return (new ArrayObject($this->bestSongs))->getIterator();
    }
}