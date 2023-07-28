<?php

namespace DesignPatterns\Composite\Songs;

use Exception;

abstract class SongComponent
{
    public function add(SongComponent $songComponent): void
    {
        throw new Exception('Unsupported Operation');
    }

    public function remove($componentIndex): void
    {
        throw new Exception('Unsupported Operation');
    }

    public function getComponent($componentIndex): SongComponent
    {
        throw new Exception('Unsupported Operation');
    }

    public function getName(): string
    {
        throw new Exception('Unsupported Operation');
    }

    public function getBand(): string
    {
        throw new Exception('Unsupported Operation');
    }

    public function getReleaseYear(): int
    {
        throw new Exception('Unsupported Operation');
    }

    public function displaySongInfo(): void
    {
        throw new Exception('Unsupported Operation');
    }
}
