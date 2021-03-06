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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'FrontendController@home')->name('home');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/services', 'FrontendController@services')->name('services');
Route::get('/projects', 'FrontendController@projects')->name('projects');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/contact', 'FrontendController@contact')->name('contact');
