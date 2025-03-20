<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class collect_log extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:collect_log';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * Here we call the logic we need to schedule 
     */
    public function handle()
    {
        info('Log collecting done :)');
    }
}
