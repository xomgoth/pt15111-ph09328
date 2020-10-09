<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
//use request để nhận dữ liệu gửi lên theo kiểu request
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// tạo route resource cho students
Route::resource('students', StudentsController::class);
// Route::get('students', function(){
// // su dung query buider
// $students = DB::table('students')->where('id' ,'=','5')->first();

// return view('students.detail',['studentsValue'=>$students]);
// });


// Route::get('students-list',function(){
//     //truy van o day
//     $students = DB::table('students')->orderBy('id','desc')->get();
//     // dd($students);
//     return view('students.list',['listStudents' => $students]);
// })->name('students-list'); 


//chức năng login

// Route::get('/login',function(){

// return view('login');

// })->name('login-view');


// Route::post('/post-login',function(Request $request){
// //xu li login ,truy van...

//         $username = $request->username;
//         //thực hiện truy vấn theo giá trị vừa gửi lên
//         $students = DB::table('students')->where('name', 'like', "%$username%")->first();
//             //nếu có students thì sẽ redirect sang students-list
//                     if($students){
//                       return redirect()->route('students-list');

//                     }else{
                    
//             //nếu khoogn thì quay lại login
//                     return redirect()->route('login-view');
//                     }
// })->name('post-login');



// bảng subjects
Route::get('subjects-list',function(){
    $subjects = DB::table('subjects')->orderBy('id','desc')->get();
    return view('subjects.list',['listSubjects'=>$subjects]);
})->name('subjects-list');

