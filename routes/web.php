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
            Route::get('/profile', 'HomeController@profile')->name('profile');
            Route::get('/momo', 'HomeController@momo')->name('momo');
            Route::get('/payments', 'HomeController@getPayments')->name('payments');
        });

    });

});


Route::group(['namespace' => 'Admin'], function () {


    //Prefix {ppsg-admin}
    Route::group(['prefix' => 'ppsg-admin'], function () {
        Route::get('/test-call', 'WebSiteSettingsController@saveDick')->name('test.call');
        Route::group(['middleware' => ['verified','role:admin']], function () {

            Route::group(['prefix' => 'web-site-settings'], function () {
                Route::get('/settings-dashboard', 'WebSiteSettingsController@dashboard')->name('settings.dashboard');
                Route::get('/banner-slider-form', 'WebSiteSettingsController@create_banner_slider')->name('banner.slider.form');
                Route::post('/save-banner-slider', 'WebSiteSettingsController@store_banner')->name('banner.slider.store');

                Route::get('/add-abouts', 'WebSiteSettingsController@createAboutText')->name('about.add');
                Route::post('/store-abouts', 'WebSiteSettingsController@storeAboutText')->name('about.store');

                Route::get('/edit-abouts', 'WebSiteSettingsController@editAboutText')->name('about.edit');
                Route::post('/update-abouts', 'WebSiteSettingsController@updateAboutText')->name('about.update');


                Route::get('/add-what-we-do', 'WebSiteSettingsController@createWWDText')->name('wwd.add');
                Route::post('/store-what-we-do', 'WebSiteSettingsController@storeWWDText')->name('wwd.store');

                Route::get('/edit-what-we-do', 'WebSiteSettingsController@editWWDText')->name('wwd.edit');
                Route::post('/update-what-we-do', 'WebSiteSettingsController@updateWWDText')->name('wwd.update');


            });

        });

    });

});

