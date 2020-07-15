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

Auth::routes();

//Route::get('/login', 'HomeController@login')->name('home');

// Routes

Route::get('/login', 'LoginController@index')->name('site.login');

Route::get('/home', 'HomeController@index')->name('site.home');

Route::get('/students', 'StudentController@index')->name('site.students');

Route::get('/teachers', 'TeacherController@index')->name('site.teachers');

Route::get('/courses', 'CourseController@index')->name('site.courses');
