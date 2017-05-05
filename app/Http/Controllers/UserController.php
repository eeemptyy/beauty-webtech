<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index($name)
  {
    $user = DB::table('users')->where('firstname', $name)->first();
    $history = DB::table('histories')->where('user_id',$user->id)->get();
    // foreach ($history as $data){
    //   echo $data->user_id;
    //   echo $data->course_id;
    // }
    return view('user-profile',[
      'id' => $user->id,
      'firstname' => $user->firstname,
      'lastname' => $user->lastname,
      'email' => $user->email,
      'point' => $user->point,
      'history' => $history
    ]);
  }
}
