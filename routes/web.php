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

Route::view('/index' , 'welcome')->name('index');
// Route::get('/montanas-en-santander' , 'ViewsController@montanas')->name('montanas-en-santander');
Route::view('/montanas-en-santander' , 'montanas.montanas-en-santander')->name('montanas-en-santander');
Route::view('/parques-de-santander' , 'parques.parques-de-santander')->name('parques-de-santander');
Route::view('/pueblos-de-santander' , 'pueblos.pueblos-de-santander')->name('pueblos-de-santander');