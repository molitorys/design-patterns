<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Iterator\Songs\DiscJockey;
use DesignPatterns\Iterator\Songs\SongsOfThe70s;
use DesignPatterns\Iterator\Songs\SongsOfThe80s;
use DesignPatterns\Iterator\Songs\SongsOfThe90s;

$songs70s = new SongsOfThe70s();
$songs80s = new SongsOfThe80s();
$songs90s = new SongsOfThe90s();

$madMike = new DiscJockey($songs70s, $songs80s, $songs90s);
$madMike->showTheSongs();