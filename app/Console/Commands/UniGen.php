<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;
use App\Unigen\CommonModels;
use App\Unigen\Controllers;
use App\Unigen\AdminControllers;
use App\Unigen\Requests;
use App\Unigen\RepositoriesService;
use App\Unigen\Repositories;
use App\Unigen\Models;
use App\Unigen\Migrations;
use App\Unigen\Factories;
use App\Unigen\Seed;
use App\Unigen\Views;
use App\Unigen\Components;
use App\Unigen\AdminComponents;
use App\Unigen\Routes;
use App\Unigen\Tests;
use App\Unigen\Configs;

class UniGen extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unigen:start';

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
