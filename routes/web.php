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

Route::any('/profile', "UserController@index");
Route::any('/edit',"UserController@edit");

Route::get('course', 'CourseController@index');
Route::any('course/create', 'CourseController@create');
Route::post('course', 'CourseController@store');

Route::get('voucher',"CourseController@select_voucher");
Route::get('service',"CourseController@select_course");
Route::get('/',"CourseController@select_promotion");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
