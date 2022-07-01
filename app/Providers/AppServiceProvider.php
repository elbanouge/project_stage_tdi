<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use LaravelLocalization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        try {
            $lang = LaravelLocalization::getCurrentLocale();
            $regional = DB::table('translator_languages')->where('locale', $lang)->first()->regional;

        } catch (\Exception $e) {
              $regional = 'ar_AE';
        }
        setlocale(LC_ALL, $regional . '.utf8'); 


        $this->app->bind('path.public', function() {
            return base_path().'/local';
          });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
