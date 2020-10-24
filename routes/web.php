<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin', 'AdminController@index')->name('home');
Route::get('admin/access', 'AdminController@access')->name('home');


Route::get('admin/user', 'UserController@index')->name('home');
Route::get('admin/user/all', 'UserController@all')->name('home');
Route::post('admin/user/submit', 'UserController@submit')->name('home');

Route::get('admin/banner', 'BannerController@add')->name('home');
