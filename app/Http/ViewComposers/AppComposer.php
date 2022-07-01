<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Repositories\Menu\MenuRepository;
use Cache;

class AppComposer
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
    public function __construct(MenuRepository $menu, Request $request)
    {
        $this->menu = $menu;
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
        if (is_mobile()) {
            Cache::forget('main_menu_mobile');
            $main_menu = Cache::rememberForever('main_menu_mobile', function () {
                return $this->renderMenuMobile('main', 'main_menu');
            });
        } else {
            Cache::forget('main_menu');
            $main_menu = Cache::rememberForever('main_menu', function () {
                return $this->renderMenu('main', 'main_menu');
            });
        }



        $view->with(compact('main_menu'));
    }

    public function renderMenu($location)
    {
        $menu = $this->menu->model->where('location', $location)->first();
        $main_menu = '';

        if ($menu) {
            $links = $menu->links()->orderBy('order', 'asc')->where('parent_id', NULL)->get();
            $main_menu = '<ul class="list-inline m-0">';
            foreach ($links as $main_link) {
                $main_menu .= $main_link->renderLink(1);
            }
            $main_menu .= '</ul>';
        }

        return $main_menu;
    }
    public function renderMenuMobile($location)
    {
        $menu = $this->menu->model->where('location', $location)->first();
        $main_menu = '';

        if ($menu) {
            $links = $menu->links()->orderBy('order', 'asc')->where('parent_id', NULL)->get();
            $main_menu = '<div id="accordion">';
            foreach ($links as $main_link) {
                $main_menu .= $main_link->renderLinkMobile(1);
            }
            $main_menu .= '</div>';
        }

        return $main_menu;
    }
}
