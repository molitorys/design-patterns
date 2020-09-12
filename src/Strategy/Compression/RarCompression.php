<?php

namespace DesignPatterns\Strategy\Compression;

/**
 * Compress file into rar pack
 */
class RarCompression implements Compression
{
    public function compressFile($filePath): string
    {
        return 'Kompresuje plik '.$filePath.' do formatu RAR';
    }
}

