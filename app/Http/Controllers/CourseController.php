<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'name', 'detail', 'price', 'bonus_point',
        //  'status', 'type_id', 'category', 'pic_path'
        // $c = [
        //   '0' => [
        //   'name' => 'T course-name',
        //   'detail' => 'T course-detail',
        //   'price' => '1000',
        //   'bonus_point' => '1000',
        //   'status' => 'active',
        //   'type_id' => '123',
        //   'category' => 'face type',
        //   'pic_path' => 'pic...',
        //   ]
        // ];
        return view('course');

    }
    // protected function validator(array $data)
    // {
    // return Validator::make($data, [
    //   'name' => 'required|unique:',
    //   'price' => 'required',
    //   'bonus_point' => 'required',
    //   'pic_path' => 'required'
    //
    //     // 'name' => 'required|max:255',
    //     // 'email' => 'required|email|max:255|unique:users',
    //     // 'password' => 'required|min:6|confirmed',
    // ]);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $var = $request->all();
      // Course::create([
      //     'name' => $var['name'],
      //     'detail' => $var['detail'],
      //     'price' => $var['price'],
      //     'bonus_point' => $var['bonus_point'],
      //     'status' => $var['status'],
      //     'type_id' => $var['type_id'],
      //     'category' => $var['category'],
      //     'pic_path' => $var['pic_path']
      // ]);
      // return view('course/create');
        //
        // echo "create";
        // return view('course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Course::create($request->all());
        // $Name = $request->input('')
        // CourseType::create($request->)
        $var = $request->all();
        Course::create([
            'name' => $var['name'],
            'detail' => $var['detail'],
            'price' => $var['price'],
            'bonus_point' => $var['bonus_point'],
            'status' => $var['status'],
            'type_id' => $var['type_id'],
            'category' => $var['category'],
            'pic_path' => $var['pic_path']
        ]);
        return view('course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
