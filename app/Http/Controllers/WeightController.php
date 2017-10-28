<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeightController extends Controller
{
    /**
     * Display a listing of the Weight Log.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get data from log table ordered by date descending
        $log = DB::table('log')->orderBy('date','desc')->get();

        return view('welcome',  ['logs' => $log]);
    }

    /**
     * Show the form for creating a new log.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Remove index _token from array post
        $data = array_except($request->all(),array('_token'));

        //insert new log into table
        DB::table('log')->insert($data);

        return redirect('/')->with('success','Weight Log created successfully');
    }

    /**
     * Display the specified log.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get 1 row of log based on log id
        $log = DB::table('log')
                ->where('id', $id)
                ->first();

        return view('show',  ['log' => $log]);
    }

    /**
     * Show the form for editing the specified log.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get specified data from log table base on $id log
        $log = DB::table('log')
                ->where('id', $id)
                ->first();

        return view('edit',  ['log' => $log]);
    }

    /**
     * Update the specified log in table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Remove index _token from array post
        $data = array_except($request->all(),array('_token'));

        //Update specified data from log table base on $id log
        DB::table('log')
            ->where('id', $id)
            ->update($data);

        return redirect('/')->with('success','Weight Log updated successfully');
    }
}
