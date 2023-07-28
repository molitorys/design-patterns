<?php

namespace DesignPatterns\Iterator\Songs;

class SongsOfThe90s extends Songs
{
    public function __construct()
    {
        $this->addSong('Losing My Religion', 'REM', 1991);
        $this->addSong('Creep', 'Radiohead', 1993);
        $this->addSong('Walk on the Ocean', 'Toad the Wet Sprocket', 1985);
    }
}