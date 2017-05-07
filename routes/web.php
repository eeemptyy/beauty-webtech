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

Route::get('service', function () {
    return view('servicepage');
});
Route::get('/', function () {
    return view('homepage');
});
Route::get('course', 'CourseController@index');
Route::any('course/create', 'CourseController@create');
Route::post('course', 'CourseController@store');
Route::get('voucher', function () {
    return view('voucherpage');
});