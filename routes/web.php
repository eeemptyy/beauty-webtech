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

Route::any('profile', 'UserController@index');
Route::get('master', function(){
  return view('user-profile1');
});

Route::get('course', 'CourseController@index');
Route::any('course/create', 'CourseController@create');
Route::post('course', 'CourseController@store');

Route::get('voucher',"CourseController@select_voucher");
Route::get('service',"CourseController@select_course");
Route::get('/',"CourseController@select_promotion");

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
