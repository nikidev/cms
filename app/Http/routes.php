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

Route::get('/','HomeController@getHome');

Route::get('/home','HomeController@getHome');


/*
 * Auth
 */

Route::get('admin','AuthController@getLogIn');

Route::post('admin','AuthController@postLogIn');

Route::get('logout','AuthController@getLogOut');



/*
 * Admin
 */

Route::get('dashboard','AdminController@getDasboard');


/*
 * Categories
 */

Route::get('categories','CategoryController@viewCategoriesList');
Route::get('category/create','CategoryController@viewCreateCategory');
Route::post('category/store','CategoryController@categoryStore');
Route::get('category/delete/{id}','CategoryController@categoryDelete');
Route::get('category/edit/{id}','CategoryController@viewEditCategory');
Route::put('category/update/{id}','CategoryController@categoryUpdate');


/*
 * Articles
 */

Route::get('articles','ArticleController@viewArticlesList');
Route::get('article/create','ArticleController@viewCreateArticle');
Route::post('article/store','ArticleController@articleStore');
Route::get('article/delete/{id}','ArticleController@articleDelete');
Route::get('article/edit/{id}','ArticleController@viewEditArticle');
Route::put('article/update/{id}','ArticleController@articleUpdate');
