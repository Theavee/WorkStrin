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

Route::get('/userList','PageController@userList');

Route::get('/question','ProgrammerController@question');

Route::post('/programmer_post','ProgrammerController@post_p');

Route::post('/buyer_post','BuyerController@post_b');

Route::post('/question_post','PageController@qus');