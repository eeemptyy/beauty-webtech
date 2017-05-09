<?php

namespace App\Http\Controllers;

use App\Promotion;
use App\Course;
use Illuminate\Http\Request;
use DB;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        $course = DB::table('courses')->where('type_id',2)->get();
        return view('voucherTB', [
        'course' => $course,'courses' => $courses]);
    }

    public function getAllCourses()
    {
        //
        $courses = Course::all();
        return ['courses' => $courses];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $var = $request->all();
        app('App\Http\Controllers\EmailController')->sendNews($var);
        Promotion::create([
            'course_id' => $var['course_id'],
            'discount' => $var['discount'],
            'date_start' => $var['date_start'],
            'date_end' => $var['date_end']
        ]);
        $courses = Course::all();
        $course = DB::table('courses')->where('type_id',2)->get();
        return view('voucherTB', [
            'course' => $course,
            'courses' => $courses
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        //
    }
}
