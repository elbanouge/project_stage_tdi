<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use LaravelLocalization;
use Cache;
use App;
class Front
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $current_locales = Cache::remember('current_locales', 86400 * 300, function () {
            $locales = DB::table('translator_languages')->get();
            $items = [];
            foreach ($locales as $locale) {
                $items[$locale->locale] = $locale->id;
            }
            return $items;
        });
        //dd($current_locales);
        session(['current_locale' => $current_locales[App::getLocale()]]); 
               
        return $next($request);
    }
}
