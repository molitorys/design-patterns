<?php

namespace DesignPatterns\Strategy\Compression;

/**
 * Compress file
 */
class CompressionSystem
{
    /**
     * @var Compression
     */
    private $compressionStrategy;
    
    public function setCompressionEngine(Compression $compressionStrategy)
    {
        $this->compressionStrategy = $compressionStrategy;
    }
    
    public function compress($filePath): string
    {
        return $this->compressionStrategy->compressFile($filePath);
    }   
}

