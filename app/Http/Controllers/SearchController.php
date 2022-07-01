<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostRepository;

class SearchController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        PostRepository $post
    ) {
        $this->post = $post;
    }
    /**
     * Display the list of homes.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $loacle = session("current_locale");
        $input = $request->all();

        $posts = $this->post->search([
            "q" => $input["q"],
            "status" => 1,
            "language_id" => $loacle,
            "index" => "posts_index",
            "page_name" => "ca_page",
            "per_page" => 18,
            "status" => 1,
        ]);

        $active_tab = "posts";

        if (isset($input["ot_page"])) {
            $active_tab = "other";
        }

        return view("search", compact("posts", "active_tab"));
    }
}
