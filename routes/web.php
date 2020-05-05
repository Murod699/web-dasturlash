<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@home')->name('home');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/services', 'SiteController@services')->name('services');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::POST('/contact', 'SiteController@feedbackStore')->name('contact.store');

//Admin route
Route::namespace('Admin')->middleware('auth')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', function(){
        return redirect()->route('admin.posts.index');
    })->name('dashboard');
//Posts
Route::resource('posts', 'PostsController');
});

Auth::routes([
    'register'=> false
]);

