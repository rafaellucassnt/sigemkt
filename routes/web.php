<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
});

Route::get('/', 'SiteController@index')->name('home');

Auth::routes();


