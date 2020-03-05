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

/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', 'IndexController@pageInitial')->name('/');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'menu'], function (){
     Route::get('enviarReceita', ['uses' => 'EnviarReceitaController@sendRecipePage']);
     Route::get('contato', ['uses' => 'IndexController@contato']);
});

Route::post('/sendRecipe', 'EnviarReceitaController@sendRecipe')->name('sendRecipe');
Route::post('/contact', 'ContactController@contact')->name('contact');


