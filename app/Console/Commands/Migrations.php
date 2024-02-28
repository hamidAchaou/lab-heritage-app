<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Migrations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
                // Load migrations from multiple directories
                $mainPath = database_path('migrations');
                $directories = glob($mainPath . '/*', GLOB_ONLYDIR);
                $paths = array_merge([$mainPath], $directories);
        
                foreach ($paths as $path) {
                    $this->loadMigrationsFromPath($path);
                }
        
                
                $this->call('migrate', [
                    '--force' => true,
                ]);
            }
}
