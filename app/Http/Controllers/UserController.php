<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Auth;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function __construct()
   {
     $this->middleware('auth');
   }

   public function index()
   {
     $history = DB::table('histories')->join('courses','courses.id','=','histories.course_id')->where('user_id',Auth::user()->id)->get();
     return view('user-profile',
     'history' => $history
    ]);
  }
}
