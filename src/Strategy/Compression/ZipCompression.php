<?php
namespace DesignPatterns\Strategy\Compression;

use DesignPatterns\Strategy\Compression\Compression;

/**
 * Compress file into zip pack
 */
class ZipCompression implements Compression
{
    public function compressFile($filePath) {
        echo 'Kompresuje plik '.$filePath.' do formatu ZIP';
    }
}

