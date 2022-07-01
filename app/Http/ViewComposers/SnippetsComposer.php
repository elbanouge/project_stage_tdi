<?php

namespace App\Http\ViewComposers;

use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class SnippetsComposer
{

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        try {
            $key = $view->getData()['key'];
            $post_model = DB::table('snippets_post')->where('key', $key)->first();
            $post = json_decode($post_model->data);
        } catch (\Throwable $th) {
            $post = null;
        }
        
        $view->with(compact('post'));
    }
}
