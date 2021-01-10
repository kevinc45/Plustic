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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('/blog','BlogController@index')->name('blog');

Route::get('/projects','projectsController@index')->name('projects');
Route::get('/projects/add-projects','projectsController@addprojects')->name('add-projects');
Route::post('/projects/manage','projectsController@manage')->name('manage');
Route::get('/projects/edit-projects/{id}','projectsController@editprojects')->name('edit-projects');
Route::post('/projects/update','projectsController@update')->name('update');
Route::get('/projects/delete-projects/{id}','projectsController@deleteprojects')->name('delete-projects');
Route::get('/projects/search-projects/','projectsController@searchprojects')->name('search-projects');

Route::get('/aboutus','aboutusController@index')->name('aboutus');

Route::get('/aboutus/{history}','aboutusController@index_history')->name('aboutushistory');

Route::get('/preferences','preferencesController@index')->name('preferences');
Route::get('/preferences/contactus','preferencesController@contactus')->name('contactus');
Route::get('/preferences/tos','preferencesController@tos')->name('tos');

Route::get('/test','testController@index')->name('test');