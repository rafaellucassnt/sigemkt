<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
});

Route::get('/', 'SiteController@index')->name('home');

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return '<h1>Config cache cleared successfully</h1>';
});

Auth::routes();


