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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@index')->name('pagesIndex');


Route::get('/contact', [
    'uses'=>'contactController@create',
    'as'=>'contact.index'
]);

Route::post('/contact', [
    'uses'=>'contactController@store' ,
    'as'=>'contact.store'
]);