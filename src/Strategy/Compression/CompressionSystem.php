<?php
namespace DesignPatterns\Strategy\Compression;

/**
 * Compress file
 */
class CompressionSystem
{
    private $compressionStrategy;
    
    public function setCompressionEngine(Compression $compressionStrategy)
    {
        $this->compressionStrategy = $compressionStrategy;
    }
    
    public function compress($filePath) {
        $this->compressionStrategy->compressFile($filePath);
    }   
}

