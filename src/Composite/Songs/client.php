<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Composite\Songs\DiscJockey;
use DesignPatterns\Composite\Songs\Song;
use DesignPatterns\Composite\Songs\SongGroup;

$heavyMetalMusic = new SongGroup('Heavy Metal', 'is a genre of rock that developed in the late 1960s, largely in the UK and in the US');
$heavyMetalMusic->add(new Song('War Pigs', 'Black Sabath', 1970));
$heavyMetalMusic->add(new Song('Ace of Spades', 'Motorhead', 1980));

$dubstepMusic = new SongGroup('Dubstep', 'is a genre of electronic dance music that originated in South London, England');
$dubstepMusic->add(new Song('Centipede', 'Knife Party', 2012));
$dubstepMusic->add(new Song('Tetris', 'Doctor P', 2011));

$industrialMusic = new SongGroup('Industrial', 'is a style of experimental music that draws on transgressive and provocative themes');
$industrialMusic->add(new Song('Head Like a Hole', 'NIN', 1990));
$industrialMusic->add(new Song('Headhunter', 'Front 242', 1988));
$industrialMusic->add($dubstepMusic);

$everySong = new SongGroup('Song List', 'Every Songs Available');
$everySong->add($industrialMusic);
$everySong->add($heavyMetalMusic);

$crayLarry = new DiscJockey($everySong);

$crayLarry->getSongList();
