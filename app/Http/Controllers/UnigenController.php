<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UnigenController extends Controller
{
    
    /**
     * Display the list of homes.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show($view)
    {
        return view("porto.blade.". $view);
    }



    public function index()
    {
        //$unigen = Cache::forget("unigen");
        $unigen = Cache::get("unigen");
        if (is_null($unigen) or empty($unigen)) {
            $unigen = [
                "commun" => [
                    "category" => false,
                    "publicities" => false,
                    "api" => false,
                    "comment" => false,
                    "language" => false,
                    "poll" => false,
                    "menu" => false,
                    "link" => false,
                    "media" => false,
                    "message" => false,
                    "page" => false,
                    "setting" => false,
                    "translation" => false,
                    "user" => false,

                ], 
                "modules" => []];
        }

        return view("unigen", compact("unigen"));
    }
    
    public function save(Request $request)
    {
        $unigen = $request->all();

        Cache::put("unigen", $unigen, 60*60*24*90);

        return true;
    }

    public function export(Request $request)
    {
        $unigen = Cache::get("unigen");

        $content = json_encode($unigen);
        $content = str_replace('""""', '""',$content);

        file_put_contents(base_path("storage/unigen/data/map.json"), stripslashes($content));

        return response()->download(base_path("storage/unigen/data/map.json"), "map.json");
    }

    public function import(Request $request)
    {
        $file = request()->file("file");
        $content = file_get_contents($file->getRealPath());
        $unigen = json_decode($content);


        Cache::put("unigen", $unigen, 60*60*24*90);

        return redirect("/unigen");
    }
}