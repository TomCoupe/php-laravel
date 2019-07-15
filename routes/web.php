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

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/help', 'PageController@help');
Route::resource('projects','ProjectsController');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::delete('/projects/{task}/tasks', 'ProjectTasksController@destroy');


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

