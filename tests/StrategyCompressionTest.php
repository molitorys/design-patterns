<?php

use PHPUnit\Framework\TestCase;

use DesignPatterns\Strategy\Compression\CompressionSystem;
use DesignPatterns\Strategy\Compression\ZipCompression;
use DesignPatterns\Strategy\Compression\RarCompression;

class StrategyComporessionTest extends TestCase
{
    /** @test */
    public function it_can_compress_zip_files()
    {
        $filePath = 'plik-archiwalny-1.ods';

        $zipCompressor = new ZipCompression();

        $this->assertEquals('Kompresuje plik '.$filePath.' do formatu ZIP', $zipCompressor->compressFile($filePath));
    }

    /** @test */
    public function it_can_compress_rar_files()
    {
        $filePath = 'plik-archiwalny-2.ods';

        $rarCompressor = new RarCompression();

        $this->assertEquals('Kompresuje plik '.$filePath.' do formatu RAR', $rarCompressor->compressFile($filePath));
    }

    /** @test */
    public function compression_system_can_compress_files()
    {
        $filePath1 = 'plik-archiwalny-1.ods';
        $filePath2 = 'plik-archiwalny-2.ods';

        $compressionSystem = new CompressionSystem();

        $zipCompressor = new ZipCompression();
        $compressionSystem->setCompressionEngine($zipCompressor);
        $this->assertEquals('Kompresuje plik '.$filePath1.' do formatu ZIP', $compressionSystem->compress($filePath1));
        
        $rarCompressor = new RarCompression();
        $compressionSystem->setCompressionEngine($rarCompressor);
        $this->assertEquals('Kompresuje plik '.$filePath2.' do formatu RAR', $compressionSystem->compress($filePath2));
    }
}