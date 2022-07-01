<?php

namespace App\Http\Controllers;

use App\Repositories\Post\PostRepository;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }
    /**
     * Display the list of homes.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->post->model
            ->where("status", 1)
            ->sortable(["created_at" => "desc"])
            ->paginate(24);

        return view("index", compact("posts"));
    }
}
