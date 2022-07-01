<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DirectoryIterator;
use DB;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class FixePermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:fix';

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
        $permissions = $this->getPermission();
        //dd($permissions);
        foreach ($permissions as $key => $item) {
            $permission = Permission::firstOrCreate(['name' => $item]);
            try {
                $admin = Role::where('name', 'admin')->first();
                $superadmin = Role::where('name', 'super-admin')->first();
                $permission->assignRole($admin);
                $permission->assignRole($superadmin);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
    public function getPermission()
    {
        $files = [
          base_path('routes/admin.php'),
          base_path('routes/web.php'),
        ];
        $trans = [];
        foreach ($files as $file) {
            $content = file_get_contents("$file");
            preg_match_all('/middleware\(\'permission:[\sa-zA-Z0-9_.-s]+\'\)/', $content, $matches, 0);
            //preg_match_all('/middleware\(\'permission(\s+)?: [\sa-zA-Z0-9_.-s]+\'\)/', $content, $matches, 0);
            try {
                foreach ($matches[0] as $matche) {
                    $item = [];
                    $exp = explode(":", $matche);
                    $exp2 = explode("'", $exp[1]);
                    $trans[] = trim($exp2[0]);
                }
            } catch (\Exception $e) {
            }
        }

        return $trans;
    }
}
