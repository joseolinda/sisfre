<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ClearStorage extends Command
{
    protected $signature = 'clear:storage';
    protected $description = 'Clear and recreate the storage directory with 0755 permissions';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $storagePath = storage_path();

        // Remove the storage directory and its contents
        File::deleteDirectory($storagePath);

        // Recreate the storage directory with 0755 permissions
        File::makeDirectory($storagePath, 0755, true);

        // Create subdirectories within the storage directory
        $subdirectories = ['app', 'framework', 'logs'];

        foreach ($subdirectories as $subdir) {
            $subdirPath = $storagePath . '/' . $subdir;
            File::makeDirectory($subdirPath, 0755, true);
        }

        $this->info('Storage directory cleared and recreated with 0755 permissions and subdirectories.');
    }
}
