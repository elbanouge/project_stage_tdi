<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Repositories\Post\PostRepository;
use Cache;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct(PostRepository $post)
    public function __construct()
    {
        //$this->post = $post;
    }

    /**
     * Display a listing of the repost.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("asa");
        $stats = Cache::remember("admin_home_stats", 86400 * 300, function () {
            $stats = [];
            //$stats["posts"] = $this->post->model->count();
            return $stats;
        });

        return compact("stats");
    }
}
