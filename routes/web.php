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

Route::get('/index', 'HomeController@index')->name('home');

// Routes

Route::get('/', 'IndexController@index')->name('site.home');

Route::get('/student', 'StudentController@index')->name('site.student');

Route::get('/teacher', 'TeacherController@index')->name('site.teachers');

Route::get('/course', 'CourseController@index')->name('site.courses');
