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
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', function ()
    {
        $data= request()->all();
        echo "Email:" . $data['email'] . '<br>';
        echo "Body:" . $data['body'];
    });
Route::get('/about', 'HomeController@about')->name('about');
