<?php
namespace DesignPatterns\Strategy\Compression;

use DesignPatterns\Strategy\Compression\Compression;

/**
 * Compress file into rar pack
 */
class RarCompression implements Compression
{
    public function compressFile($filePath) {
        return 'Kompresuje plik '.$filePath.' do formatu RAR';
    }
}

