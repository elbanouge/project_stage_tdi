<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use DB;
use Cache;

class UniGenReset extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unigen:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generat full app';
    protected $common_models = [];
    protected $models = [];
    protected $snippets = [];
    protected $appName = 'App';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

    }


}
