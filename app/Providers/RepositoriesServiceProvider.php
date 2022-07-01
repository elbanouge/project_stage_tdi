<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(
            "App\Repositories\Card\CardRepository",
            "App\Repositories\Card\EloquentCardRepository"
        );
        $this->app->singleton(
            "App\Repositories\Category\CategoryRepository",
            "App\Repositories\Category\EloquentCategoryRepository"
        );
        $this->app->singleton(
            "App\Repositories\Pub\PubRepository",
            "App\Repositories\Pub\EloquentPubRepository"
        );
        $this->app->singleton(
            "App\Repositories\Api\ApiRepository",
            "App\Repositories\Api\EloquentApiRepository"
        );
        $this->app->singleton(
            "App\Repositories\Comment\CommentRepository",
            "App\Repositories\Comment\EloquentCommentRepository"
        );
        $this->app->singleton(
            "App\Repositories\Language\LanguageRepository",
            "App\Repositories\Language\EloquentLanguageRepository"
        );
        $this->app->singleton(
            "App\Repositories\Menu\MenuRepository",
            "App\Repositories\Menu\EloquentMenuRepository"
        );
        $this->app->singleton(
            "App\Repositories\Link\LinkRepository",
            "App\Repositories\Link\EloquentLinkRepository"
        );
        $this->app->singleton(
            "App\Repositories\Media\MediaRepository",
            "App\Repositories\Media\EloquentMediaRepository"
        );
        $this->app->singleton(
            "App\Repositories\Message\MessageRepository",
            "App\Repositories\Message\EloquentMessageRepository"
        );
        $this->app->singleton(
            "App\Repositories\Page\PageRepository",
            "App\Repositories\Page\EloquentPageRepository"
        );
        $this->app->singleton(
            "App\Repositories\Poll\PollRepository",
            "App\Repositories\Poll\EloquentPollRepository"
        );
        $this->app->singleton(
            "App\Repositories\Setting\SettingRepository",
            "App\Repositories\Setting\EloquentSettingRepository"
        );
        $this->app->singleton(
            "App\Repositories\Translation\TranslationRepository",
            "App\Repositories\Translation\EloquentTranslationRepository"
        );
        $this->app->singleton(
            "App\Repositories\User\UserRepository",
            "App\Repositories\User\EloquentUserRepository"
        );
    }
}
