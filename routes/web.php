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
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');
/*Route::post('/contact', function ()
    {
        $data= request()->all();
        echo "Email:" . $data['email'] . '<br>';
        echo "Body:" . $data['body'];
    });*/
Route::get('/thanks/{name}', 'ContactController@thanks') ->name ('thanks') ;
Route::get('/about', 'HomeController@about')->name('about');
