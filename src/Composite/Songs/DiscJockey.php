<?php

namespace DesignPatterns\Composite\Songs;

class DiscJockey
{
    private SongComponent $songList;

    public function __construct(SongComponent $songList)
    {
        $this->songList = $songList;
    }

    public function getSongList(): void
    {
        $this->songList->displaySongInfo();
    }
}