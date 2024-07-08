<?php

namespace Ehsan\UploadManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ehsan\UploadManager\Commands\UploadManagerCommand;

class UploadManagerServiceProvider extends PackageServiceProvider
{
    
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/upload_manager.php' => config_path('upload_manager.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/upload_manager.php', 'upload_manager'
        );
    }

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
