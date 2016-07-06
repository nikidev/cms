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

/*
 * Home
 */

Route::get('/',[
    'uses'=>'HomeController@getHome',
    'as'=>'home'
]);


/*
 * Auth
 */

Route::get('/signin',[
    'uses'=>'AuthController@getSignIn',
    'as'=>'auth.signin',
    'middleware'=>['guest']
]);

Route::post('/signin',[
    'uses'=>'AuthController@postSignIn',
    'middleware'=>['guest']
]);

Route::get('/signout',[
    'uses'=>'AuthController@getSignOut',
    'as'=>'auth.signout',
    'middleware'=>['auth']
]);

/*
 * Admin
 */

Route::get('/dashboard',[
    'uses'=>'AdminController@getDasboard',
    'as'=>'admin.dashboard'

    
]);

Route::get('/dashboard/categories',[
    'uses'=>'AdminController@getCategories',
    'as'=>'admin.categories'
]);





