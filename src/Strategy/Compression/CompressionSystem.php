<?php

namespace DesignPatterns\Strategy\Compression;

/**
 * Compress file
 */
class CompressionSystem
{
    private Compression $compressionStrategy;
    
    public function setCompressionEngine(Compression $compressionStrategy): void
    {
        $this->compressionStrategy = $compressionStrategy;
    }
    
    public function compress($filePath): string
    {
        return $this->compressionStrategy->compressFile($filePath);
    }   
}

