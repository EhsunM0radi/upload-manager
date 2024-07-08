<?php

namespace Ehsan\UploadManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ehsan\UploadManager\Commands\UploadManagerCommand;

class UploadManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('upload-manager')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_upload-manager_table')
            ->hasCommand(UploadManagerCommand::class);
    }
}
