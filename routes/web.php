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

Route::get('login' , 'Admin\AdminAuthController@showLoginForm')->name('admin.showLogin');
Route::post('login' , 'Admin\AdminAuthController@login')->name('admin.login');
Route::post('register' , 'Admin\AdminAuthController@register')->name('admin.register');

Route::group(['middleware' => 'auth:admin'] , function (){

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('admin.dashboard');

    Route::get('admin/logout' , 'Admin\AdminAuthController@logout' )->name('admin.logout');

});
