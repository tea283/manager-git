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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('manaup', 'Auth\ManagerController@showRegistrationForm')->name('manaup.get');
Route::post('manaup', 'Auth\ManagerController@register')->name('manaup.post');

Route::get('mana_login', 'Auth\ManagerController@showLoginForm')->name('manalog.get');
Route::post('mana_login', 'Auth\ManagerController@login')->name('manalog.post');
Route::get('mana_logout', 'Auth\ManagerController@logout')->name('logout.get');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.get');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');    

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'User\ManagersController', ['only' => ['index', 'show']]);
});
