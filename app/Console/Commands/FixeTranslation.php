<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DirectoryIterator;
use DB;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Spatie\Permission\Models\Role;
use App\Models\Link;


class FixeTranslation extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'translator:fix {--af}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Command description';

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
