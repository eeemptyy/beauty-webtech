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

// Route::get('service', function () {
//     return view('servicepage');
// });
// Route::get('/', function () {
//     return view('homepage');
// });
Route::get('voucher', function () {
    return view('voucherpage');
});

Route::get('voucher',"CourseController@select_voucher");
Route::get('service',"CourseController@select_course");
Route::get('/',"CourseController@select_promotion");
