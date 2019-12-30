<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\requser;
use App\User;
use Hash;
use App\course;
use DB;
use App\timetable;
use Storage;
use Response;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = requser::get();
        return view('Dashboard/Auth2User')->with('requests'  , $requests );
    }

    public function viewCourse()
    {
        $profs = User::where('type' ,'=', 'professor')->get();
        return view('Dashboard.CreateCourse')->with('profs'  , $profs );
    }

     public function Table()
    {
       
        return view('Dashboard.CreateTable');
    }
    public function viewTable()
    {
        $tables = timetable::all();
       
        return view('Dashboard.viewTable')->with('tables', $tables);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    //Create User
    public function create(Request $request)
    {
         $Validator=  Validator::make($request->all(),[

            'ID' =>'required',
            'name' =>'required',
            'email' =>'required',
            'mobile' =>'required',
            'code' =>'required',
            'type' =>'required',
           
        ])->validate();

        if (DB::table('users')->where("email", '=',  $request->email)->exists() || 
            (DB::table('usesr')->where("code", '=',  $request->code)->exists()) 
           ) 
            {
           
             return redirect()->back()->with('fail','msg');

            }else{
  
        $user = new User();
        $user->userID  = $request->ID;
        $user->name    = $request->name;
        $user->email   = $request->email;
        $user->password = Hash::make($request->ID);
        $user->mobile  = $request->mobile;
        $user->code = $request->code;
        $user->type = $request->type;
        $user->save();
        return redirect()->back()->with('success','msg');;
               }
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
    //Authorization 
    public function delete($id)
    {

        $user = requser::find($id);
        $user->delete();
        return redirect()->back();
    }

     public function accept($id)
    {
        
        $req = requser::where('id', '=' ,$id)->first();
        $user = new User();
        $user->userID  = $req->user_id;
        $user->name    = $req->name;
        $user->email   = $req->email;
        $user->password = Hash::make($req->user_id);
        $user->mobile  = $req->mobile;
        $user->code = $req->code;
        $user->type = $req->type;
        $user->save();
        $req = requser::find($id);
        $req->delete();
        return redirect()->back();

    }
    // CreateCourse
    public function CreateCourse (Request $request)
    {
        $Validator=  Validator::make($request->all(),[

            'code' =>'required',
            'name' =>'required',
            'professor' =>'required',
            'level' =>'required',
           
        ])->validate();

        if (DB::table('courses')->where("code", '=',  $request->code)->exists() || 
            (DB::table('courses')->where("name", '=',  $request->name)->exists()) 
           ) 
            {
           
             return redirect()->back()->with('fail','msg');

            }else{

        $course = new course();
        $course->code    =   $request->code;
        $course->name    =   $request->name;
        $course->prof_id =   $request->professor;
        $course->level   =   $request->level;
        $course->save();
        return redirect()->back()->with('success','msg');
                
            }

    }
     public function createTable (Request $request)
    {
        // validation
         $Validator=  Validator::make($request->all(),[

            'file' =>'required',
            'level' =>'required',
           
           
        ])->validate();

         // check if exits

          if (DB::table('timetables')->where("level", '=',  $request->level)->exists())
          {
            return redirect()->back()->with('fail', 'msg');
          }else{

         //get file path

       
        $file = $request->file('file');
         // generate a new filename. getClientOriginalExtension() for the file extension
         $filename = 'timeTable-' . time() . '.' . $file->getClientOriginalExtension();
         // save to storage/app/photos as the new $filename
         $path = $file->storeAs('files', $filename);

          // save in DB
         $table = new timetable();
         $table->level =  $request->level;
         $table->file =  $path;
         $table->save();
         return redirect()->back()->with('success' , 'msg');
          }
        

    }

    //downloadFile
    public function getDownload($id)
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

    return Response::download($file, 'filename.pdf', $headers);
      //  echo  $path;

   }
    

    
}
