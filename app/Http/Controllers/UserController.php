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
<<<<<<< HEAD

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
=======
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
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function show(Role $role)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function edit(Role $role)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Role $role)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function destroy(Role $role)
  {
>>>>>>> master
  }
}
