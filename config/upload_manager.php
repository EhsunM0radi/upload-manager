<?php

// config for Ehsan/UploadManager

return [

    /*
    |--------------------------------------------------------------------------
    | Default Storage Disk
    |--------------------------------------------------------------------------
    |
    | This option controls the default storage "disk" that will be used by the
    | upload manager to store files. You can set this to any of the disks
    | defined in your `config/filesystems.php`.
    |
    */

    'default_disk' => env('UPLOAD_MANAGER_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Upload Path
    |--------------------------------------------------------------------------
    |
    | This option defines the default upload path where the files will be
    | stored. You can set this to any path within your storage disk.
    |
    */

    'upload_path' => env('UPLOAD_MANAGER_PATH', 'uploads'),

    /*
    |--------------------------------------------------------------------------
    | Allowed File Types
    |--------------------------------------------------------------------------
    |
    | This option defines the allowed file types for upload. You can specify
    | the mime types or file extensions that are allowed.
    |
    */

    'allowed_file_types' => [
        'image/jpeg',
        'image/png',
        'application/pdf',
        // Add more types as needed
    ],

    /*
    |--------------------------------------------------------------------------
    | Maximum File Size
    |--------------------------------------------------------------------------
    |
    | This option defines the maximum file size (in kilobytes) that can be
    | uploaded. You can adjust this value as per your requirements.
    |
    */

    'max_file_size' => env('UPLOAD_MANAGER_MAX_FILE_SIZE', 4096), // in KB

    /*
    |--------------------------------------------------------------------------
    | Storage Configurations
    |--------------------------------------------------------------------------
    |
    | Additional configurations related to storage, such as cloud storage
    | settings, can be defined here.
    |
    */

    'storage' => [
        's3' => [
            'bucket' => env('AWS_BUCKET'),
            'region' => env('AWS_DEFAULT_REGION'),
            // Add more configurations as needed
        ],
    ],

];
