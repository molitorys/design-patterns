<?php

namespace DesignPatterns\Composite\Songs;

use ArrayObject;

class SongGroup extends SongComponent
{
    private ArrayObject $songComponents;
    private int $songComponentIndex;

    private string $name;
    private string $description;

    public function __construct(string $name, string $description)
    {
        $this->songComponents = new ArrayObject([]);
        $this->songComponentIndex = 0;

        $this->name = $name;
        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function add(SongComponent $newSongComponent): void
    {
        $this->songComponents->offsetSet($this->songComponentIndex, $newSongComponent);
        $this->songComponentIndex++;
    }

    public function remove($componentIndex): void
    {
        $this->songComponents->offsetUnset($componentIndex);
    }

    public function getComponent($componentIndex): SongComponent
    {
        return $this->songComponents->offsetGet($componentIndex);
    }

    public function displaySongInfo(): void
    {
        echo $this->getName().': '.$this->getDescription().'<br />';

        $songIterator = $this->songComponents->getIterator();

        while($songIterator->valid()) {
            $songInfo = $songIterator->current();
            $songInfo->displaySongInfo();
            $songIterator->next();
        }
    }
}