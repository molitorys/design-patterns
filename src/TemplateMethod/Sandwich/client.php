<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\TemplateMethod\Sandwich\ItalianHoagie;
use DesignPatterns\TemplateMethod\Sandwich\VeggieHoagie;

echo '<b>Customer 12 - Italian Hoagie:</b><br />';
$hoagie = new ItalianHoagie();
$hoagie->makeSandwich();

echo '<br /> ----------------------- <br />';

echo '<b>Customer 13 - Veggie Hoagie:</b><br />';
$hoagie = new VeggieHoagie();
$hoagie->makeSandwich();
