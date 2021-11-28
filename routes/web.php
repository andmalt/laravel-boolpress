<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Guests\HomeController@index')->name('guests.home');
Route::get('/contatti', 'Guests\HomeController@contact')->name('guests.contact');
Route::post('/contatti', 'Guests\HomeController@createContact')->name('guests.contact.send');
Route::get('/thanks', 'Guests\HomeController@thanks')->name('guests.thanks');

Auth::routes(['verify' => true]);

Route::middleware('auth')
->middleware('verified')
->namespace('Admin')
->name('admin.')
->prefix('admin')
->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/post','PostController');
    Route::resource('/user','UserController');
});


Route::get("{any?}", function () {
    return view('guests.home');
})->where('any','.*');