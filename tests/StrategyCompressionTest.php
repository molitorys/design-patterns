<?php

use PHPUnit\Framework\TestCase;

use DesignPatterns\Strategy\Compression\CompressionSystem;
use DesignPatterns\Strategy\Compression\ZipCompression;
use DesignPatterns\Strategy\Compression\RarCompression;

class StrategyComporessionTest extends TestCase
{
    private $compressionSystem;

    public function setUp()
    {
        $this->compressionSystem = new CompressionSystem();
    }

    /** @test */
    public function it_can_compress_zip_files()
    {
        $filePath = 'plik-archiwalny-1.ods';

        $this->compressionSystem->setCompressionEngine(new ZipCompression());

        $this->assertEquals('Kompresuje plik '.$filePath.' do formatu ZIP', $this->compressionSystem->compress($filePath));
    }

    /** @test */
    public function it_can_compress_rar_files()
    {
        $filePath = 'plik-archiwalny-2.ods';
 
        $this->compressionSystem->setCompressionEngine(new RarCompression());
 
        $this->assertEquals('Kompresuje plik '.$filePath.' do formatu RAR', $this->compressionSystem->compress($filePath));
    }
}