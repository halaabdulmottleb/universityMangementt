<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use Auth;
use DB;
use student_course;
use App\timetable;
use Storage;
use Response;

class studentController extends Controller
{
    public function course() {

        $courses = course::where('level' , '=' , Auth::User()->level)->get();
    	return view('student.enrollCourse')->with('courses' ,$courses);
    }

    public function viewCourse() {

    	$courses = DB::table('student_courses')->where("student_id", '=', Auth::user()->id)->get();

    	return view('student.course')->with('courses' , $courses);
    }

    public function enroll(Request $request) {

    	 if (DB::table('student_courses')->where("course_id", '=', $request->course)->exists()) 
            {
           
             return redirect()->back()->with('fail','msg');

            }

    	DB::table("student_courses")->insert([

    		'student_id' => Auth::User()->id,
    		'course_id' => $request->course

    	]);
    	return redirect()->back()->with('success','msg');
    	
    }
    // Table
    public function viewTable()
    {
        $table = timetable::where('level' , '=' , Auth::User()->level)->first();
       
        return view('student.viewTable')->with('table', $table);
    }

     //downloadFile
    public function getTable($id)
    {
         $table = timetable::where('id' ,'=', $id)->first();
         $path = $table->file;


    // //PDF file is stored under project/public/download/info.pdf
     $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();

    $file= $storagePath . $path;

     echo $file;

    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, 'TimeTable.pdf', $headers);
      //  echo  $path;

   }
    
    
}
