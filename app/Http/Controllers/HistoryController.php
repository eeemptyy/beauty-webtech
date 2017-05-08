<?php

namespace App\Http\Controllers;

use App\History;
use App\CourseType;
use App\Course;
use App\User;
use App\CouresCouter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use DateTime;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        //
        // $types = CourseType::all();

        $services = Course::all();
        $users = User::all();
        return view('get-service', [ 'services' => $services, 'users' => $users]);
    }

    public function index2()
    {
        //
        // $types = CourseType::all();

        $services = Course::all();
        $users = User::all();
        return view('get-voucher', [ 'services' => $services, 'users' => $users]);
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

     protected function validator(array $data)
     {
         return Validator::make($data, [
             'firstname' => 'required|string|max:255',
             'lastname' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:6|confirmed',
         ]);
     }

    public function store1(Request $request)
    {
        //
        //'user_id', 'course_id', 'date_purchase'
        $var = $request->all();
        $this->updatePoint($var);

        // $types = CourseType::all();
        $services = Course::all();
        $users = User::all();

        History::create([
            'user_id' => $var['user_id'],
            'course_id' => $var['course_id'],
            'date_purchase' => new DateTime(),
        ]);
        return view('get-service', [ 'services' => $services, 'users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */

    public function store2(Request $request)
    {
        //'user_id', 'course_id', 'date_purchase'
        $var = $request->all();
        $this->updatePoint($var);

        // $types = CourseType::all();
        $services = Course::all();
        $users = User::all();

        History::create([
            'user_id' => $var['user_id'],
            'course_id' => $var['course_id'],
            'date_purchase' => new DateTime(),
        ]);
        // 'course_id', 'counter', 'date'
        // CouresCouter::create([
        //   'course_id' => $var['course_id'],
        // ]);

        return view('get-voucher', [ 'services' => $services, 'users' => $users]);
    }

    public function updatePoint($data)
    {

      $user = DB::table('users')->where('id', $data['user_id'])->first();
      $service = DB::table('courses')->where('id',$data['course_id'])->first();
      $oldPoint = $user->point;

      // 1 = coures , 2 = vorcher

      if ($service->type_id == 1){
        DB::table('users')
            ->where('id', $data['user_id'])
            ->update(['point' => $oldPoint + $service->bonus_point]);
      }
      elseif ($service->type_id == 2) {
        DB::table('users')
            ->where('id', $data['user_id'])
            ->update(['point' => $oldPoint - $service->price]);
      }

      // DB::table('course_couter')
      //     ->where('course_id', $data['user_id'])
      //     ->update(['point' => $oldPoint + $service->bonus_point]);
    }

    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    // public function destroy(History $history)
    // {
    //     //
    // }
}
