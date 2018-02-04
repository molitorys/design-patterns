<?php
namespace DesignPatterns\Strategy\Compression;

/**
 * Compression interface
 */
interface Compression
{
    public function compressFile($filePath);
}
