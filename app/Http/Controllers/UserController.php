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
    return view('user-profile',[
      'id' => $user->id,
      'firstname' => $user->firstname,
      'lastname' => $user->lastname,
      'email' => $user->email,
      'point' => $user->point,
      'history' => $history
    ]);
  }

  public function update(Request $request)
  {
    // $data = $request->input('name');
    // $all = $request->all();
    // $name = $all->firstname;
    // DB::table('users')
    // ->where('firstname', $name)
    // ->update(['firstname' => $data]);
		//return view("register",$data);
    echo $request->input('_token');
  }
}
