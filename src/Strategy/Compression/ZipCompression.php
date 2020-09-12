<?php

namespace DesignPatterns\Strategy\Compression;

/**
 * Compress file into zip pack
 */
class ZipCompression implements Compression
{
    public function compressFile($filePath) : string
    {
        return 'Kompresuje plik '.$filePath.' do formatu ZIP';
    }
}

