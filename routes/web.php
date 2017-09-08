<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::group(['middleware'=>'auth'],function(){

        Route::resource('/', 'Controller@index');
        Route::resource('/notebooks', 'NotebooksCtrl');
        Route::post('/notebooks', 'NotebooksCtrl@store');
        Route::get('/notebooks/{notebooks}/edit', 'NotebooksCtrl@edit');
        Route::put('/notebooks/{notebooks}', 'NotebooksCtrl@update');
        Route::delete('/notebooks/{notebooks}', 'NotebooksCtrl@destroy');



// });


Auth::routes();

// Route::get('/home', 'HomeController@index');
//
// Route::get('/login', function () {
//     return view('auth.login');
// });
