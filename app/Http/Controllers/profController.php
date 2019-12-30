<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth ;
use App\Course;
use DB;
class profController extends Controller
{
	//view page
    public function students()
    {

    	$courses = course::where('Prof_id' , '=' , Auth::User()->id)->get();
    	return view('prof.CourseView')->with('courses', $courses);
    }

    public function manage($id)
    {
    	// get Student Enroll in course
    	$courses = DB::table('student_courses')->where("course_id", '=',$id)->get();
        $basic = DB::table('courses')->where("id", '=',$id)->first();
         $name = $basic->name;
    	return view('prof.GradAtten')->with(['courses'=> $courses , 'name' =>$name] );
    }

     public function UpdateGrd(Request $Request)
    {
       
       DB::table('student_courses')
            ->where('id',$Request->course )
            ->update([
                'grade' => $Request->grade,
                
            ]);
            return redirect()->back();
    }

    public function UpdateAtten(Request $Request)
    {
       
       DB::table('student_courses')
            ->where('id',$Request->course )
            ->update([
                'atten' => $Request->aten,
                
            ]);
            return redirect()->back();
    }

    


}
