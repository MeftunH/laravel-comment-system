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

//Route::get('/', function () {
//    return view('/home/index');
//});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin/users', function () {
    return view('admin.users.index');
});

//logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//**********Post*********
Route::get('post/create', 'PostController@create')->name('post.create');
Route::post('post/store', 'PostController@store')->name('post.store');

//*******For Admin *****************
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>['auth','admin']],function (){
Route::get('dashboard','DashboardController@index')->name('dashboard');
});

//*******For User *****************
Route::group(['prefix'=>'user','as'=>'user.','namespace'=>'User','middleware'=>['auth','user']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
