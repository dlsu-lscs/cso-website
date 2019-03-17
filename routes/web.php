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
Route::get('csoadmin', 'AdminController@index');
// Route::get('csoadmin/login', 'AdminController@login');
Route::get('csoadmin/viewblogs', 'AdminController@viewblogs');
Route::get('csoadmin/editblog/{id}', 'AdminController@editblog');
Route::post('csoadmin/editblog/{id}', 'AdminController@updatedraft');
Route::post('csoadmin/preview', 'AdminController@preview');
Route::post('csoadmin/draft', 'AdminController@draft');
Route::post('csoadmin/publish', 'AdminController@publish');
Route::post('csoadmin/delete', 'AdminController@delete');
Route::resource('blogs','BlogController');
// Auth::routes();
Route::get('csoadmin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('csoadmin/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');