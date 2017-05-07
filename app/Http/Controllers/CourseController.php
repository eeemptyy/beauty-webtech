<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
// use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function select_voucher(){
       $data = DB::table('courses')->get();
       return view('voucherpage',['data' => $data]);

     }
     public function select_promotion(){
       $data = DB::table('courses')->join('promotions','promotions.course_id','=','courses.id')->get();
       return view('homepage',['data' => $data]);
     }
     public function select_course(){
       $data_promotion = DB::table('courses')->join('promotions','promotions.course_id','=','courses.id')->get();
       $data = DB::table('courses')->get();

       return view('servicepage',['data' => $data,'data_promotion' => $data_promotion]);
     }
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

        // DB::table('users')->select('users.id','users.name','profiles.photo')->join('profiles','profiles.id','=','users.id')->where(['something' => 'something', 'otherThing' => 'otherThing'])->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
      return "Create Success!";
        //
        // echo "create";
        // return view('course');
      $data = DB::table('courses')->get();
      return view('servicepage',['data' => $data]);

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
        return Course::create([
            'name' => $var['name'],
            'detail' => $var['detail'],
            'price' => $var['price'],
            'bonus_point' => $var['bonus_point'],
            'status' => $var['status'],
            'type_id' => $var['type_id'],
            'category' => $var['category'],
            'pic_path' => $var['pic_path']
        ]);
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
        //
        // $data = DB::table('courses')->get();
        // return view('test',['data' => $data]);
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
