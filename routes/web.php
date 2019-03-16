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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('Home.Home');
// });

// Route::get('/users/{id}', function($id){
//     return 'Hello '.$id;
// });

Route::get('/', 'PageController@index');
Route::get('admin', 'AdminController@index');
Route::get('admin/viewblogs', 'AdminController@viewblogs');
Route::get('admin/editblog/{id}', 'AdminController@editblog');
Route::post('admin/editblog/{id}', 'AdminController@updatedraft');
Route::post('admin/preview', 'AdminController@preview');
Route::post('admin/draft', 'AdminController@draft');
Route::post('admin/publish', 'AdminController@publish');
Route::post('admin/delete', 'AdminController@delete');
Route::resource('blogs','BlogController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
