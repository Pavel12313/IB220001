<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class CopyLangFiles extends Command
{
    protected $signature = 'lang:copy';

    protected $description = 'Copy lang files from vendor package to lang directory';

    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();
        $this->filesystem = $filesystem;
    }

    public function handle()
    {
        $vendorPath = base_path('vendor/laravel-lang/lang/locales/ja');
        $destinationPath = resource_path('lang/ja');

        $this->filesystem->copyDirectory($vendorPath, $destinationPath);

        $this->info('Language files copied successfully!');
    }
}
