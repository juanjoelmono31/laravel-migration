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

Route::get('/', "UserController@index");
Route::get('user/create', function(){

    return view('users.create');

});
Route::post('user/store', "UserController@store");
Route::get('blogs/{id}', "BlogsController@index");
Route::get('blogs/create/{id}', function ($id) {

    return view('blogs.create')->with('id_usuario', $id);
    
});
Route::post('blogs/store', "BlogsController@store");
