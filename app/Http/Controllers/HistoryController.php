<?php

namespace App\Http\Controllers;

use App\History;
use App\CourseType;
use App\Course;
use App\User;
use App\CouresCouter;
use Illuminate\Http\Request;
use DateTime;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = CourseType::all();
        $services = Course::all();
        $users = User::all();
        return view('get-service', ['types' => $types, 'services' => $services, 'users' => $users]);
        // return view('get-service');
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
        //'user_id', 'course_id', 'date_purchase'
        $types = CourseType::all();
        $services = Course::all();
        $users = User::all();


        $var = $request->all();
        History::create([
            'user_id' => $var['user_id'],
            'course_id' => $var['course_id'],
            'date_purchase' => new DateTime(),
        ]);
        // 'course_id', 'counter', 'date'
        // CouresCouter::create([
        //   'course_id' => $var['course_id'],
        //
        //
        // ]);
        return view('get-service', ['types' => $types, 'services' => $services, 'users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
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
    public function destroy(History $history)
    {
        //
    }
}
