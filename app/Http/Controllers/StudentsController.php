<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = Student::all(); //lấy ra hết
      // hoặc $students = Students::oderby('id',''desc)->get();
      return view('students.list',['students'=>$students]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('them ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('Controlowerdsdfs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
  
    public function show(Student $students)
    {   
        //nếu chỉ truyền vào $students thì chỉ nhận được id của students
        // $studentObjEloquentModel = Student::find($students);
        // còn truyền vào Student $students thì tuy vấn tìm Students có id đó
        // $studentObj = DB::table('students')->find($students);
        
        return view('students.show',['students'=> $students]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $students)
    {
        //
    }
}
