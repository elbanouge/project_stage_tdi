<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Cache;
use Auth;
//use App\Post;
//use App\Models\Comment;

class AdminComposer
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
        $user  = Auth::user();

        $counts = [];
        //$counts['posts'] = Post::count();
        //$counts['comments'] = Comment::count();

        
        $view->with(compact('user', 'counts'));
    }
}
