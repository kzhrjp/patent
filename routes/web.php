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
Route::get('/edit', 'Auth\EditController@index')->name('edit');
Route::get('/mypage', 'MyPageController@index')->name('mypage');


Route::get ('/contact',          'ContactsController@index');
Route::post('/contact/confirm',  'ContactsController@confirm');
Route::post('/contact/store',    'ContactsController@store');
Route::get ('/contact/result',   'ContactsController@result');

Route::get('/help', 'HelpController@index');

Route::get('corporate/terms', 'CorporateController@terms');
Route::get('corporate/corporate', 'CorporateController@corporate');