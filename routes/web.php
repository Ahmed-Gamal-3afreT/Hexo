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

//Route::get('admin', 'HomeController@index')->name('home');


Route::get('/', 'UserController@index');

/*
Route::get('admin', 'HomeController@home');*/


Auth::routes(['verify' => true]);







Route::get('logout', 'UserController@logout');









Route::get('members', 'UserController@users');














Route::get('member/delete/{id}', 'UserController@delete');

Route::get('member/deleted', 'UserController@deleted');

Route::get('member/restore/{id}', 'UserController@restore');









Route::get('member/serch/{name}', 'SearchController@userSearch');
