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
use View;

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
        return view('createService');

        // DB::table('users')->select('users.id','users.name','profiles.photo')->join('profiles','profiles.id','=','users.id')->where(['something' => 'something', 'otherThing' => 'otherThing'])->get();

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

        $name = $var['name'];
        $detail = $var['detail'];
        $price = $var['price'];
        $bouns = $var['bonus_point'];
        $pic =$var['pic_path'];

        // if ($name == ''){
          $n = '';
          $d = '';
          $p = '';
          $b = '';
          $p1 = '';
              // if ($name == ''){
              //     $n = "Name not Null!";
              //     return view("course",
              //     ['nameNull' => $n]);
              // }
              // if ($detail == '') {
              //   $d = "Detail not Null!";
              //   return view("course",[
              //     'DetailNull' => $d]);
              // }
              // if ($price == '') {
              //   $p1 = "Price not Null!";
              //   return view("course",[
              //     'PriceNull' => $p1]);
              // }
              // if ($bouns == '') {
              //   $b = "Bonus Point not Null!";
              //   return view("course",[
              //     'BounsNull' => $b]);
              // }
              // if ($pic == '') {
              //   $p = "Picture not Null!";
              //   return view("course",[
              //     'PictureNull' => $p]);
              // }

              // if ($name == ''){
              //     $n = "Name not Null!";
              //
              // // if ($detail == '') {
              // //   $d = "Detail not Null!";
              // // }
              // // if ($price == '') {
              // //   $p1 = "Price not Null!";
              // // }
              // // if ($bouns == '') {
              // //   $b = "Bonus Point not Null!";
              // // }
              // // if ($pic == '') {
              // //   $p = "Picture not Null!";
              //   return view("course",[
              //     'nameNull' => $n
              //   ]);
                  // 'nameNull' => $n,'DetailNull' => $d, 'PriceNull' => $p1, 'BounsNull' => $b,'PictureNull' => $p]);

            // }
            //   else {
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
                return view('createService');
              // }
//
        // return view('course');
    }

    public function checkNull($input)
    {

    }
    /**}
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
