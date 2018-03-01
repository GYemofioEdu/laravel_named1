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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/why-bother-with-this', 'PagesController@store')->name('anything');
Route::get('/does-not-matter/{name}', 'PagesController@thanks')->name('thanks');

Route::get('/just-for-show', 'PagesController@registerinit')->name('registerinit');
Route::post('/just-for-show', 'PagesController@register')->name('register');
Route::get('/just-for-show/{usr_fullname}', 'PagesController@registerdisplay')->name('registerdisplay');






