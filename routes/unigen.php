<?php
Route::get('/{view}', array('as' => 'unigen.about.me', 'uses' => 'UnigenController@show'));

Route::get('/unigen', array('as' => 'unigen.index', 'uses' => 'UnigenController@index'));
Route::post('/unigen/save', array('as' => 'unigen.save', 'uses' => 'UnigenController@save'));
Route::get('/unigen/export', array('as' => 'unigen.export', 'uses' => 'UnigenController@export'));
Route::post('/unigen/import', array('as' => 'unigen.import', 'uses' => 'UnigenController@import'));
