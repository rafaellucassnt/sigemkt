<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/api', 'ApiController@apiUser')->name('api');
});

Route::get('/', 'SiteController@index')->name('home');
Route::get('guideapi', 'SiteController@docApi')->name('home');

Auth::routes();


