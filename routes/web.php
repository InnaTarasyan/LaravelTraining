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
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::resource('applications', 'Admin\ApplicationsController');
    Route::resource('webapps', 'Admin\ApplicationsController');
    Route::resource('comments', 'Admin\CommentsController');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::resource('menus', 'Admin\MenusController');
    Route::resource('users', 'Admin\UsersController');
});


Route::get('/', 'HomeController@index');
Route::get('/show/{id}', 'HomeController@show')->name('show');
Route::resource('comments', 'CommentsController');

Route::get('/get_android_apps/{type}', ['as' => 'datatable.get_android_apps','uses' => 'HomeController@getAndroidApps']);
Route::get('/get_web_apps/{type}', ['as' => 'datatable.get_web_apps','uses' => 'HomeController@getAndroidApps']);