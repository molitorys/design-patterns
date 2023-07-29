<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Visitor\Tax\Liquor;
use DesignPatterns\Visitor\Tax\Necessity;
use DesignPatterns\Visitor\Tax\Tabacco;
use DesignPatterns\Visitor\Tax\TaxHolidayVisitor;
use DesignPatterns\Visitor\Tax\TaxVisitor;

$taxCalc = new TaxVisitor();
$taxHolidayCalc = new TaxHolidayVisitor();

$milk = new Necessity(3.47);
$vodka = new Liquor(11.99);
$cigars = new Tabacco(19.99);

echo $milk->accept($taxCalc);
echo '<br />';
echo $vodka->accept($taxCalc);
echo '<br />';
echo $cigars->accept($taxCalc);
echo '<br />';
echo 'TAX HOLIDAY PRICES: <br />';
echo $milk->accept($taxHolidayCalc);
echo '<br />';
echo $vodka->accept($taxHolidayCalc);
echo '<br />';
echo $cigars->accept($taxHolidayCalc);
echo '<br />';