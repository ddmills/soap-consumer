<?php

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/contact', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
    Route::get('/contact/{contact}', ['as' => 'contact.show', 'uses' => 'ContactController@show']);
    Route::get('/contact/actions', ['as' => 'contact.actions', 'uses' => 'ContactController@actions']);
    Route::get('/contact/schema', ['as' => 'contact.schema', 'uses' => 'ContactController@schema']);
});
