<?php
require_once '../../../vendor/autoload.php';

use DesignPatterns\Strategy\Compression\CompressionSystem;
use DesignPatterns\Strategy\Compression\ZipCompression;
use DesignPatterns\Strategy\Compression\RarCompression;

$compressionSystem = new CompressionSystem();

$compressionSystem->setCompressionEngine(new ZipCompression());
$compressionSystem->compress('plik-archiwalny-1.ods');

echo '<br />';

$compressionSystem->setCompressionEngine(new RarCompression());
$compressionSystem->compress('plik-archiwalny-2.ods');

