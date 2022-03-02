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
    return view('home');
});

Route::group(['middleware' => ['usercheck']], function () {

    Route::get('/user/contactlist','App\Http\Controllers\UserController@getAllContacts');

    Route::get('/user/dashboard', function () {
        return view('dashboard_user');
    });
    Route::post('/user/dashboard','App\Http\Controllers\UserController@fileUpload')->name('file.upload');

});

Route::group(['middleware' => ['admincheck']], function () {

    
    Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard');
    Route::get('/registration','App\Http\Controllers\UserController@registration');
    Route::post('/registration','App\Http\Controllers\AdminController@createUser');
    Route::get('/userlist','App\Http\Controllers\AdminController@getAllUsers');
    Route::get('/user/block/{id}','App\Http\Controllers\AdminController@getBlockUser');
    Route::post('/user/block/{id}','App\Http\Controllers\AdminController@BlockUser');
    Route::get('/user/delete/{id}','App\Http\Controllers\AdminController@getDeleteUser');
    Route::post('/user/delete/{id}','App\Http\Controllers\AdminController@DeleteUser');
    Route::get('/user/edit/{id}','App\Http\Controllers\AdminController@getEditUser');
    Route::post('/user/edit/{id}','App\Http\Controllers\AdminController@EditUser');
});

Route::get('/login','App\Http\Controllers\UserController@login');
Route::get('/user/login','App\Http\Controllers\UserController@userlogin');
Route::get('/logout','App\Http\Controllers\UserController@logout');
Route::post('/user/login','App\Http\Controllers\UserController@loginVerify');
Route::post('/login','App\Http\Controllers\AdminController@adminloginVerify');

