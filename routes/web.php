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
Route::get('organizations', 'PageController@organizations');
Route::get('organizations/{id}', 'PageController@orgpage');
Route::get('aboutus', 'PageController@about');
Route::get('activities', 'PageController@activities');
Route::get('csoadmin', 'AdminController@index');
// Route::get('csoadmin/login', 'AdminController@login');
Route::get('csoadmin/viewblogs', 'AdminController@viewblogs');
Route::get('csoadmin/editblog/{id}', 'AdminController@editblog');
Route::post('csoadmin/editblog/{id}', 'AdminController@updatedraft');
Route::post('csoadmin/preview', 'AdminController@preview');
Route::post('csoadmin/draft', 'AdminController@draft');
Route::post('csoadmin/publish', 'AdminController@publish');
Route::post('csoadmin/delete', 'AdminController@delete');
Route::get('csoadmin/manageorgs', 'AdminController@manageorgs');
Route::get('csoadmin/manageorgs/{id}', 'AdminController@orgeditor');
Route::resource('blogs','BlogController');
// Auth::routes();
Route::get('csoadmin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('csoadmin/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Admin Control
// Route::get('csoadmin/makeclusters', 'AdminController@createclusters');
// Route::post('csoadmin/makeclusters', 'AdminController@handlecreateclusters')->name('makecluster');
Route::get('csoadmin/makeofficers', 'AdminController@createofficers');
Route::post('csoadmin/makeofficers', 'AdminController@handlecreateofficers')->name('makeofficers');
Route::get('csoadmin/updateinfo', 'AdminController@updateinfo');
Route::post('csoadmin/addinfo', 'AdminController@handleupdateinfo')->name('makeinfo');


Route::get('/home', 'HomeController@index')->name('home');