<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
/* index  */

Route::get("/", array("as" => "index", "uses" => "HomeController@index"));

/* search  */
Route::get("/search", array("as" => "search", "uses" => "SearchController@show"));

/*Card*/
Route::get("/cards", array("as" => "card.index", "uses" => "CardController@index"));
Route::get("/card/{slug}", array("as" => "card.show", "uses" => "CardController@show"));

/*Category*/
Route::get("/category/{slug}", array("as" => "category.show", "uses" => "CategoryController@show"));

/* Comment */
Route::get("/comments/{type}/{id}", array("as" => "comment.index", "uses" => "CommentController@index"));
Route::get("/comment/like/{id}", array("as" => "comment.like", "uses" => "CommentController@like"));
Route::get("/comment/dislike/{id}", array("as" => "comment.dislike", "uses" => "CommentController@dislike"));
Route::get("/comment/signal/{id}", array("as" => "comment.signal", "uses" => "CommentController@signal"));
Route::post("/comment", array("as" => "comment.store", "uses" => "CommentController@store"));
Route::middleware("auth")->group(function () {
    Route::put("/comment/{id}", array("as" => "comment.update", "uses" => "CommentController@update"));
    Route::delete("/comment/{id}", array("as" => "comment.destroy", "uses" => "CommentController@destroy"));
});

/* Media  */
Route::post("/medias/upload", array("as" => "medias.upload", "uses" => "MediaController@upload"));

/* Page  */
Route::get("/about", array("as" => "page.about", "uses" => "PageController@about"));
Route::get("/sitemap", array("as" => "page.sitemap", "uses" => "PageController@sitemap"));
Route::get("/contact", array("as" => "page.contact", "uses" => "PageController@contact"));
Route::post("/contact", array("as" => "store.contact", "uses" => "PageController@storeMessage"))->middleware(ProtectAgainstSpam::class);

/*Poll*/
Route::get("/poll", array("as" => "poll.index", "uses" => "PollController@index"));
Route::post("/poll", array("as" => "poll.index", "uses" => "PollController@vote"));

Route::middleware(["auth:sanctum", "verified"])->get("/dashboard", function () {
    return view("dashboard");
})->name("dashboard");
