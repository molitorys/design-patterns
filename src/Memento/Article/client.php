<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Memento\Article\Caretaker;
use DesignPatterns\Memento\Article\Originator;

$caretaker = new Caretaker();
$originator = new Originator();

$savedFiles = 0;
$currentArticle = 0;

// SAVE 1:
$article = 'I walked ';
$originator->set($article);
$caretaker->addMemento($originator->storeInMemento());

$savedFiles++;
$currentArticle++;

echo '<br />Save Files '.$savedFiles.'<br />';

// SAVE 2:
$article .= 'down the street and I saw something';
$originator->set($article);
$caretaker->addMemento($originator->storeInMemento());

$savedFiles++;
$currentArticle++;

echo '<br />Save Files '.$savedFiles.'<br />';

// UNDO:
if ($currentArticle >= 1) {
    $currentArticle--;
    $theArticle = $originator->restoreFromMemento($caretaker->getMemento($currentArticle));

    $currentArticle--;
    $theArticle = $originator->restoreFromMemento($caretaker->getMemento($currentArticle));
}