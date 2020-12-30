<?php

use Illuminate\Support\Facades\Route;
use Wink\WinkPage;
use Wink\WinkPost;

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

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/posts', 'PostController@index')->name('posts.all');
Route::get('/posts/{winkPost:slug}/read', 'PostController@show')->name('posts.read');

Route::get('/tags/{winkTag:slug}/all', 'TagController@index')->name('tags.all');
