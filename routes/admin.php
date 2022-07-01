<?php

use Illuminate\Support\Facades\Route;

/* index  */
Route::get("/", array("as" => "index", "uses" => "HomeController@index"));


/*Card*/
Route::get("/cards", array("as" => "card.index", "uses" => "CardController@index"));
Route::get("/card/create", array("as" => "card.create", "uses" => "CardController@create"));
Route::post("/card", array("as" => "card.store", "uses" => "CardController@store"));
Route::get("/card/{id}", array("as" => "card.show", "uses" => "CardController@show"));
Route::get("/card/edit/{id}", array("as" => "card.edit", "uses" => "CardController@edit"));
Route::put("/card/{id}", array("as" => "card.update", "uses" => "CardController@update"));
Route::delete("/card/{id}", array("as" => "card.destroy", "uses" => "CardController@destroy"));
Route::get("/card/restore/{id}", array("as" => "card.restore", "uses" => "CardController@restore"));
Route::get("/card/{id}/status/{status}", array("as" => "card.status", "uses" => "CardController@changeStatus"));
Route::get("/card/{id}/promoted/{promoted}", array("as" => "card.promoted", "uses" => "CardController@changePromote"));
Route::get("/card/{id}/sticky/{sticky}", array("as" => "card.sticky", "uses" => "CardController@changeSticky"));
Route::get("/card/duplicate/{id}", array("as" => "card.duplicate", "uses" => "CardController@duplicate"));
Route::post("/card/actions", array("as" => "card.actions", "uses" => "CardController@actions"));


/*Category*/
Route::get("/categories", array("as" => "category.index", "uses" => "CategoryController@index"));
Route::post("/category", array("as" => "category.store", "uses" => "CategoryController@store"));
Route::get("/category/{id}", array("as" => "category.show", "uses" => "CategoryController@show"));
Route::get("/category/edit/{id}", array("as" => "category.edit", "uses" => "CategoryController@edit"));
Route::put("/category/{id}", array("as" => "category.update", "uses" => "CategoryController@update"));
Route::delete("/category/{id}", array("as" => "category.destroy", "uses" => "CategoryController@destroy"));
Route::get("/category/{id}/status/{status}", array("as" => "category.status", "uses" => "CategoryController@changeStatus"));
Route::post("/category/actions", array("as" => "category.actions", "uses" => "CategoryController@actions"));


/* Pubs  */
Route::get("/pubs", array("as" => "pub.index", "uses" => "PubController@index"));
Route::post("/pub", array("as" => "pub.store", "uses" => "PubController@store"));
Route::get("/pub/edit/{id}", array("as" => "pub.edit", "uses" => "PubController@edit"));
Route::post("/pub/translations/{id}", array("as" => "pub.store", "uses" => "PubController@translations"));
Route::put("/pub/{id}", array("as" => "pub.update", "uses" => "PubController@update"));
Route::delete("/pub/{id}", array("as" => "pub.destroy", "uses" => "PubController@destroy"));
Route::get("/pub/restore/{id}", array("as" => "pub.restore", "uses" => "PubController@restore"));
Route::get("/pub/{id}/status/{status}", array("as" => "pub.status", "uses" => "PubController@changeStatus"));
Route::post("/pub/actions", array("as" => "pub.actions", "uses" => "PubController@actions"));


/* Api  */
Route::get("/api", array("as" => "api.index", "uses" => "ApiController@index"));


/* Comment  */
Route::get("/comments", array("as" => "comment.index", "uses" => "CommentController@index"));
Route::get("/comment/create", array("as" => "comment.create", "uses" => "CommentController@create"));
Route::post("/comment", array("as" => "comment.store", "uses" => "CommentController@store"));
Route::post("/comment/translations/{id}", array("as" => "comment.store", "uses" => "CommentController@translations"));
Route::get("/comment/edit/{id}", array("as" => "comment.edit", "uses" => "CommentController@edit"));
Route::put("/comment/{id}", array("as" => "comment.update", "uses" => "CommentController@update"));
Route::delete("/comment/{id}", array("as" => "comment.destroy", "uses" => "CommentController@destroy"));
Route::get("/comment/restore/{id}", array("as" => "comment.restore", "uses" => "CommentController@restore"));
Route::get("/comment/{id}/status/{status}", array("as" => "comment.status", "uses" => "CommentController@changeStatus"));
Route::post("/comment/actions", array("as" => "comment.actions", "uses" => "CommentController@actions"));


/*  Language */
Route::get("/languages", array("as" => "language.index", "uses" => "LanguageController@index"));
Route::post("/language", array("as" => "language.store", "uses" => "LanguageController@store"));
Route::get("/language/edit/{id}", array("as" => "language.edit", "uses" => "LanguageController@edit"));
Route::put("/language/{id}", array("as" => "language.update", "uses" => "LanguageController@update"));
Route::delete("/language/{id}", array("as" => "language.destroy", "uses" => "LanguageController@destroy"));
Route::post("/language/actions", array("as" => "language.actions", "uses" => "LanguageController@actions"));
Route::get("/language/{id}/status/{status}", array("as" => "language.status", "uses" => "LanguageController@changeStatus"));


/* Menu  */
Route::get("/menus", array("as" => "menu.index", "uses" => "MenuController@index"));
Route::post("/menu", array("as" => "menu.store", "uses" => "MenuController@store"));
Route::get("/menu/{id}", array("as" => "menu.show", "uses" => "MenuController@show"));
Route::get("/menu/edit/{id}", array("as" => "menu.edit", "uses" => "MenuController@edit"));
Route::put("/menu/{id}", array("as" => "menu.update", "uses" => "MenuController@update"));
Route::delete("/menu/{id}", array("as" => "menu.destroy", "uses" => "MenuController@destroy"));
Route::get("/menu/{id}/status/{status}", array("as" => "menu.status", "uses" => "MenuController@changeStatus"));



Route::post("/link", array("as" => "link.store", "uses" => "MenuController@storeLink"));
Route::get("/link/edit/{id}", array("as" => "link.edit", "uses" => "MenuController@editLink"));
Route::put("/link/{id}", array("as" => "link.update", "uses" => "MenuController@updateLink"));
Route::delete("/link/{id}", array("as" => "link.destroy", "uses" => "MenuController@destroyLink"));
Route::post("/link/get-items", array("as" => "link.get.items", "uses" => "MenuController@getItems"));


/* Media  */
Route::get("/medias", array("as" => "media.index", "uses" => "MediaController@index"));
Route::get("/medias/clear-folder/{folder}", array("as" => "media.clear.folder", "uses" => "MediaController@clearFolder"));
Route::get("/medias/clear-medias/{folder}", array("as" => "media.clear.medias", "uses" => "MediaController@clearMedias"));
Route::post("/medias/upload", array("as" => "medias.upload", "uses" => "MediaController@upload"));
Route::post("/file/upload", array("as" => "file.upload", "uses"  => "MediaController@uploadFile"));
Route::post("/medias/upload-file", array("as" => "medias.upload.file", "uses" => "MediaController@uploadFile"));
Route::post("/images/ckupload", array("as" => "article.ckupload", "uses" => "MediaController@ckuploadImages"));
Route::put("/media/{id}", array("as" => "media.update", "uses" => "MediaController@update"));
Route::delete("/media/{id}", array("as" => "media.destroy", "uses" => "MediaController@destroy"));


/* Message  */
Route::get("/messages", array("as" => "message.index", "uses" => "MessageController@index"));
Route::get("/message/{id}", array("as" => "message.show", "uses" => "MessageController@show"));
Route::delete("/message/{id}", array("as" => "message.destroy", "uses" => "MessageController@destroy"));
Route::get("/message/{id}/viewed/{viewed}", array("as" => "message.viewed", "uses" => "MessageController@changeViewed"));
Route::post("/message/actions", array("as" => "message.actions", "uses" => "MessageController@actions"));


/* Page  */
Route::get("/pages", array("as" => "page.index", "uses" => "PageController@index"));
Route::get("/page/create", array("as" => "page.create", "uses" => "PageController@create"));
Route::post("/page", array("as" => "page.store", "uses" => "PageController@store"));
Route::post("/page/translations/{id}", array("as" => "page.store", "uses" => "PageController@translations"));
Route::get("/page/edit/{id}", array("as" => "page.edit", "uses" => "PageController@edit"));
Route::put("/page/{id}", array("as" => "page.update", "uses" => "PageController@update"));
Route::delete("/page/{id}", array("as" => "page.destroy", "uses" => "PageController@destroy"));
Route::get("/page/restore/{id}", array("as" => "page.restore", "uses" => "PageController@restore"));
Route::get("/page/{id}/status/{status}", array("as" => "page.status", "uses" => "PageController@changeStatus"));
Route::post("/page/actions", array("as" => "page.actions", "uses" => "PageController@actions"));

/*Poll*/
Route::get("/polls", array("as" => "poll.index", "uses" => "PollController@index"));
Route::get("/poll/create", array("as" => "poll.create", "uses" => "PollController@create"));
Route::post("/poll", array("as" => "poll.store", "uses" => "PollController@store"));
Route::get("/poll/{id}", array("as" => "poll.show", "uses" => "PollController@show"));
Route::get("/poll/edit/{id}", array("as" => "poll.edit", "uses" => "PollController@edit"));
Route::put("/poll/{id}", array("as" => "poll.update", "uses" => "PollController@update"));
Route::delete("/poll/{id}", array("as" => "poll.destroy", "uses" => "PollController@destroy"));
Route::get("/poll/restore/{id}", array("as" => "poll.restore", "uses" => "PollController@restore"));
Route::get("/poll/{id}/status/{status}", array("as" => "poll.status", "uses" => "PollController@changeStatus"));
Route::get("/poll/{id}/promoted/{promoted}", array("as" => "poll.promoted", "uses" => "PollController@changePromote"));
Route::get("/poll/{id}/sticky/{sticky}", array("as" => "poll.sticky", "uses" => "PollController@changeSticky"));
Route::get("/poll/duplicate/{id}", array("as" => "poll.duplicate", "uses" => "PollController@duplicate"));
Route::post("/poll/actions", array("as" => "poll.actions", "uses" => "PollController@actions"));


/* Setting  */
Route::get("/settings", array("as" => "setting.index", "uses" => "SettingController@index"));
Route::put("/settings", array("as" => "setting.update", "uses" => "SettingController@update"));

/* Translation  */
Route::get("/translations", array("as" => "translation.index", "uses" => "TranslationController@index"));
Route::post("/translation", array("as" => "translation.store", "uses" => "TranslationController@store"));
Route::put("/translations", array("as" => "translation.update", "uses" => "TranslationController@update"));
Route::delete("/translation/{id}", array("as" => "translation.destroy", "uses" => "TranslationController@destroy"));
Route::get("/translations/translator-fix", array("as" => "translation.translator.fix", "uses" => "TranslationController@fixTranslations"));
Route::post("/translation/actions", array("as" => "translation.actions", "uses" => "TranslationController@actions"));



/* User  */
Route::get("/users", array("as" => "user.index", "uses" => "UserController@index"));
Route::get("/user/create", array("as" => "user.create", "uses" => "UserController@create"));
Route::post("/user", array("as" => "user.store", "uses" => "UserController@store"));
Route::get("/user/edit/{id}", array("as" => "user.edit", "uses" => "UserController@edit"));
Route::put("/user/{id}", array("as" => "user.update", "uses" => "UserController@update"));
Route::delete("/user/{id}", array("as" => "user.destroy", "uses" => "UserController@destroy"));
Route::get("/user/{id}/role/{role}", array("as" => "user.role", "uses" => "UserController@changeRole"));
Route::post("/user/upload-avatar", array("as" => "user.uploadAvatar", "uses" => "UserController@uploadAvatar"));
Route::post("/user/actions", array("as" => "user.actions", "uses" => "UserController@actions"));


