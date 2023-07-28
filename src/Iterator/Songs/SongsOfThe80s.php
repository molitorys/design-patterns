<?php

namespace DesignPatterns\Iterator\Songs;

class SongsOfThe80s extends Songs
{
    public function __construct()
    {
        $this->addSong('Roam', 'B52s', 1989);
        $this->addSong('Cruel Summer', 'Bananarama', 1984);
        $this->addSong('Head Over Heels', 'Tears for Fears', 1985);
    }
}