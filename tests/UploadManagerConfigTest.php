<?php

namespace Ehsan\UploadManager\Tests;

use Orchestra\Testbench\TestCase;

class UploadManagerConfigTest extends TestCase
{
    /** @test */
    public function it_reads_the_correct_config_values()
    {
        $this->assertEquals('local', config('upload_manager.default_disk'));
        $this->assertEquals('uploads', config('upload_manager.upload_path'));
        $this->assertEquals(4096, config('upload_manager.max_file_size'));
    }

    protected function getPackageProviders($app)
    {
        return [
            \Ehsan\UploadManager\UploadManagerServiceProvider::class,
        ];
    }
}
