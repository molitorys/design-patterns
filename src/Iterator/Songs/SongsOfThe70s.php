<?php

namespace DesignPatterns\Iterator\Songs;

class SongsOfThe70s extends Songs
{
    public function __construct()
    {
        $this->addSong('Imagine', 'John Lennon', 1971);
        $this->addSong('American Pie', 'Don McLean', 1971);
        $this->addSong('I will survive', 'Gloria Gaynor', 1979);
    }
}