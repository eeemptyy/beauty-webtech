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
Route::post('course', 'CourseController@store');

Route::get('promotion', 'PromotionController@index');
Route::post('promotion', 'PromotionController@store');

Route::get('get-course', 'HistoryController@index1');
Route::post('get-course', 'HistoryController@store1');

Route::get('get-voucher', 'HistoryController@index2');
Route::post('get-voucher', 'HistoryController@store2');

Route::get('voucher', function () {
    return view('voucherpage');
});

Route::get('/{$name}', 'UserController@index');

Route::get('voucher',"CourseController@select_voucher");

Route::get('service',"CourseController@select_course");

Route::get('/',"CourseController@select_promotion");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('createService', 'PromotionController@index');
