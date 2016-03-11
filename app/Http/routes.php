<?php

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/contact', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
    Route::get('/contact/{contact}', ['as' => 'contact.show', 'uses' => 'ContactController@show']);
    Route::get('/salesorder', ['as' => 'salesOrder.index', 'uses' => 'SalesOrderController@index']);
    Route::get('/salesorder/{salesOrder}', ['as' => 'salesorder.show', 'uses' => 'SalesOrderController@show']);
});
