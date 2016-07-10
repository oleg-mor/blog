<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'], function()
{
    Route::get('/', function()
    {
        return view('dashboard');
    });
});


//
//Route::get('/admin', function () {
//    return view('dashboard');
//});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/api/articles/get', 'Api\ArticlesController@get');

Route::get('/api/gallery/get', 'Api\GalleryController@get');
