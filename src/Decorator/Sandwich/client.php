<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Decorator\Sandwich\BasicSandwich;
use DesignPatterns\Decorator\Sandwich\Salami;
use DesignPatterns\Decorator\Sandwich\Chees;
use DesignPatterns\Decorator\Sandwich\Vegetables;

// Basic Sandwich
$sandwich = new BasicSandwich();

// Sandwich Additions
$sandwich = new Salami($sandwich);
$sandwich = new Chees($sandwich);
$sandwich = new Vegetables($sandwich);

// Above can be written in one line:
// $sandwich = new Vegetables(new Salami(new Chees(new BasicSandwich())));

// Final Sandwich
echo 'Wybrane składniki: '.implode(', ', $sandwich->getIngredients());
echo 'Koszt: '.$sandwich->getCost().' zł';


