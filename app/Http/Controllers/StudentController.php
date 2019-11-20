<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        //
        for ($i=1; $i <= $id ; $i++) {
            # code...
            $student['roll_no'.$i] = Cache::get('roll_no'.$i, 'defaultroll_no');
            $student['first_name'.$i] = Cache::get('first_name'.$i, 'defaultfirst_name');
            $student['last_name'.$i] = Cache::get('last_name'.$i, 'defaultlast_name');
            $student['class_name'.$i] = Cache::get('class_name'.$i, 'defaultclass_name');
            $student['school_name'.$i] = Cache::get('school_name'.$i, 'defaultschool_name');
        }

        return view('student.index')->with('student', $student)->with('id', $id);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
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
        $id = Cache::get('id',0);
        $id++;
        Cache::put('id', $id);
        Cache::put('roll_no'.$id, $request->roll_no);
        Cache::put('first_name'.$id, $request->first_name);
        Cache::put('last_name'.$id, $request->last_name);
        Cache::put('class_name'.$id, $request->class_name);
        Cache::put('school_name'.$id, $request->school_name);
        return redirect('students/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
