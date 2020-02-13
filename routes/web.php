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

//Route::get('/', function () {
////    return "love you";
//    return view('welcome');
//});

use App\Http\Controllers;
//use Illuminate\Routing\Route;

//use Illuminate\Routing\Route;

Route::get("/", 'SitesController@index');

Route::get('/about', 'SitesController@about');

Route::get('/contact', 'SitesController@contact');

//Route::get('/articles', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');
//Route::get('/articles/{id}', 'ArticlesController@show');
//Route::post('/articles', 'ArticlesController@store');

Route::resource('articles', 'ArticlesController');

//Route::get('/about', function () {
////    return "6188218";
//    return view('sites.about');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
