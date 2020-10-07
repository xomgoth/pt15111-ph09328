<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

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
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $student = new Student;
     $student->name = $request->name;
     $student->phone = $request->phone;
     $student->age = $request->age;
     $student->address = $request->address;
     $student->gender = $request->gender;
     $student->save();
      return redirect()->route('students.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
  
    public function show(Student $student)
    {   
        //nếu chỉ truyền vào $students thì chỉ nhận được id của students
        // $studentObjEloquentModel = Student::find($students);
        // còn truyền vào Student $students thì tuy vấn tìm Students có id đó
        // $studentObj = DB::table('students')->find($students);
        return view('students.show',['students'=> $student]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
            return view('students.edit',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //gán giá trị mới cho thuộc tính của students cần update
        $student = new Student;
     $student->name = $request->name;
     $student->phone = $request->phone;
     $student->age = $request->age;
     $student->address = $request->address;
     $student->gender = $request->gender;
     $student->save();
      return redirect()->route('students.index');  
       // thực hiện gửi phương thức save()

     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
      if($student) {
          $student->delete(); // tra ve ket qua true or false
      } 
      // cach 2 $studen::destroy($studen->id);
      return redirect()->route('students.index');
      //redirect về danh sách (có thực hiện để lấy danh sách mới)
    }
}
