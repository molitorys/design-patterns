<?php

namespace DesignPatterns\Iterator\Songs;

class DiscJockey
{
    private \Iterator $iter70sSongs;
    private \Iterator $iter80sSongs;
    private \Iterator $iter90sSongs;

    public function __construct(SongsIterator $newSongs70s, SongsIterator $newSongs80s, SongsIterator $newSongs90s)
    {
        $this->iter70sSongs = $newSongs70s->createIterator();
        $this->iter80sSongs = $newSongs80s->createIterator();
        $this->iter90sSongs = $newSongs90s->createIterator();
    }

    public function showTheSongs(): void
    {
        echo 'Songs of the 70s <br />';
        $this->printTheSongs($this->iter70sSongs);

        echo '<br /><br />';

        echo 'Songs of the 80s <br />';
        $this->printTheSongs($this->iter80sSongs);

        echo '<br /><br />';

        echo 'Songs of the 90s <br />';
        $this->printTheSongs($this->iter90sSongs);

        echo '<br /><br />';
    }

    public function printTheSongs(\Iterator $iterator): void
    {
        /** @var SongInfo $songInfo */
        while($iterator->valid()) {
            $songInfo = $iterator->current();
            echo $songInfo->getName().' - '.$songInfo->getBand().' - '.$songInfo->getYearReleased().'<br />';
            $iterator->next();
        }
    }
}