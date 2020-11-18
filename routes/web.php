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

// Page
Route::get('/', 'PageController@index');
// Route::get('home', 'HomeController@index')->name('home');
Route::get('organizations', 'PageController@organizations');
Route::get('organizations/{id}', 'PageController@orgpage');
Route::get('aboutus', 'PageController@about');
Route::get('activities', 'PageController@activities');
Route::post('api/seemore', 'PageController@seemore'); // ?
Route::get('contact', 'PageController@contact');
Route::post('contact', 'PageController@email');
Route::get('download', 'DownloadController@get');
Route::get('download/{file}', 'DownloadController@getFile');
Route::resource('blogs','BlogController');

// Admin
Route::get('csoadmin', 'AdminController@index');
Route::get('csoadmin/login', 'AdminController@login');
Route::post('csoadmin/preview', 'AdminBlogController@preview');
Route::get('csoadmin/manageorgs', 'AdminOrgController@manageorgs');
Route::get('csoadmin/manageorgs/{id}', 'AdminOrgController@orgeditor');
Route::patch('csoadmin/handlemanageorgs', 'AdminOrgController@update');
Route::get('csoadmin/org/add', 'AdminOrgController@create');
Route::post('csoadmin/org/store', 'AdminOrgController@store');
Route::resource('csoadmin/blogs', 'AdminBlogController');
Route::get('csoadmin/editmaininfo', 'AdminController@maininfoeditor');
Route::post('csoadmin/editmaininfo', 'AdminController@handleupdatemaininfo')->name('editmaininfo');

// Admin Download
Route::get('csoadmin/download', 'AdminDownloadController@getcreate');
Route::post('csoadmin/download', 'AdminDownloadController@create');
Route::get('csoadmin/download/delete', 'AdminDownloadController@getdelete');
Route::get('csoadmin/download/delete/{file}', 'AdminDownloadController@delete');

// Auth::routes();
Route::get('csoadmin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('csoadmin/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/* NOT USED PATH
 Route::get('csoadmin/viewblogs', 'AdminController@viewblogs');
 Route::get('csoadmin/editblog/{id}', 'AdminController@editblog');
 Route::post('csoadmin/editblog/{id}', 'AdminController@updatedraft');
 Route::get('csoadmin/trashblog/{id}', 'AdminController@delete');

 Route::post('csoadmin/draft', 'AdminController@draft'); // ? not used
 Route::post('csoadmin/publish', 'AdminController@publish'); // ? not used
 Route::post('csoadmin/delete', 'AdminController@delete');

 

 Route::get('csoadmin/makeclusters', 'AdminController@createclusters');
 Route::post('csoadmin/makeclusters', 'AdminController@handlecreateclusters')->name('makecluster');

 Route::post('csoadmin/addinfo', 'AdminController@handleupdateinfo')->name('makeinfo'); // not used
 Route::get('csoadmin/updateinfo', 'AdminController@updateinfo');
 Route::get('csoadmin/makeofficers', 'AdminController@createofficers');
 Route::post('csoadmin/makeofficers', 'AdminController@handlecreateofficers')->name('makeofficers');
*/