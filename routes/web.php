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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('/getUsersToFollow', 'HomeController@usersToFollow')->name('getUsersToFollow');
Route::post('/sendPost', 'PostsController@create')->name('sendPost');
Route::delete('/deletePost', 'PostsController@destroy')->name('deletePost');


//API
Route::get('/user', function(){
    return Auth::user();
})->middleware('auth');


