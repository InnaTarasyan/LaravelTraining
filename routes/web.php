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


Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\ApplicationsController@index');
    Route::get('/add', 'Admin\ApplicationsController@add')->name('add');
    Route::resource('applications', 'Admin\ApplicationsController');
    Route::resource('comments', 'Admin\CommentsController');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::resource('menus', 'Admin\MenusController');
});


Route::get('/', 'HomeController@index');