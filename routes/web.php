<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);
Route::group(['prefix' => 'ppsg-member'], function(){
    Auth::routes();
});

Route::group(['namespace' => 'Researcher'], function () {
    Route::get('/', 'AuthController@welcome')->name('welcome');
    //Prefix {ppsg-member}
    Route::group(['prefix' => 'ppsg-member'], function () {

        Route::group(['middleware' => 'verified'], function () {
            //Waiting for routes
            Route::get('/home', 'HomeController@index')->name('home');

        });

    });

});

