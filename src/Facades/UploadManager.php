<?php

namespace Ehsan\UploadManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ehsan\UploadManager\UploadManager
 */
class UploadManager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ehsan\UploadManager\UploadManager::class;
    }
}
