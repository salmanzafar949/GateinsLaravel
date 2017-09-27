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

Auth::routes();

Route::get('/subs', function(){
    
    if (Gate::allows('subs-only', Auth::user())) {
        // The current user can update the post...
        return view('subs');
    }
    else
    {
        return "You are not a subscriber, subscribe now";
    }
    
});
Route::get('/home', 'HomeController@index')->name('home');
