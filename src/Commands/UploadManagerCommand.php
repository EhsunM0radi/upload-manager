<?php

namespace Ehsan\UploadManager\Commands;

use Illuminate\Console\Command;

class UploadManagerCommand extends Command
{
    public $signature = 'upload-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
