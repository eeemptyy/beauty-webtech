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

Route::get('createService', 'PromotionController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::any('/sendmail', function()
{
	$data = array('name' => 'EMPTY');

	Mail::send('emails.welcome', $data, function($message)
	{
		$message->to('jompol.s@outlook.com')
		->subject('Hi there!  Laravel sent me!');
	});
    dd('Mail Send Successfully');
});


Route::post('/send', 'EmailController@send');

Route::get('/mail-config',  function() {
    return dd(config('mail'));
});

Route::get('userTB', "UserTBController@show");
Route::get('courseTB', "CourseTBController@show");
Route::get('voucherTB', "VoucherTBController@show");

Route::post('change', function () {
	return view('changepass');
});

Route::post('change/validate', 'ChangePasswordController@store');
