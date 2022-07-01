<?php
 Route::get('login/{provider}', ['uses' =>  'Auth\RegisterController@redirectToProvider','as' => 'social.login' ] );
 Route::get('login/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
 //Auth::routes(['verify' => true]);
