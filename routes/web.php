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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactController@index')->name('contact.index');

Route::get('/contacts/create', 'ContactController@create')->name('contact.create');

Route::post('/contacts', 'ContactController@store')->name('contact.store');

Route::get('/contacts/{id}/edit', 'ContactController@edit')->name('contact.edit');

Route::post('/contacts/{id}/store', 'ContactController@update')->name('contact.update');

Route::get('/contacts/{id}', 'ContactController@show')->name('contact.show');

Route::post('/contacts/{id}/delete', 'ContactController@destroy')->name('contact.destroy');