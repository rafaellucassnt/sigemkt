<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->group(function(){
	Route::prefix('user')->group(function(){
		Route::get('/', 'UserController@index')->name('index_user');
		Route::get('/{id}', 'UserController@show')->name('single_user');
		Route::post('/', 'UserController@store')->name('store_user');
    });

    Route::prefix('campanhas')->group(function(){
		Route::get('/', 'CampanhaController@index')->name('index_campanha');
		Route::get('/{id}', 'CampanhaController@show')->name('single_campanha');
		Route::post('/', 'CampanhaController@store')->name('store_campanha');
    });
    
    Route::prefix('melhoriacontinuas')->group(function(){
		Route::get('/', 'MelhoriaContinuaController@index')->name('index_melhoriacontinua');
		Route::get('/{id}', 'MelhoriaContinuaController@show')->name('single_melhoriacontinua');
		Route::post('/', 'MelhoriaContinuaController@store')->name('store_melhoriacontinua');
    });

    Route::prefix('analisevendas')->group(function(){
		Route::get('/', 'AnaliseVendaController@index')->name('index_analisevenda');
		Route::get('/{id}', 'AnaliseVendaController@show')->name('single_analisevenda');
		Route::post('/', 'AnaliseVendaController@store')->name('store_analisevenda');
    });
    
    Route::prefix('vendas')->group(function(){
		Route::get('/', 'VendaController@index')->name('index_venda');
		Route::get('/{id}', 'VendaController@show')->name('single_venda');
		Route::post('/', 'VendaController@store')->name('store_venda');
	});
});