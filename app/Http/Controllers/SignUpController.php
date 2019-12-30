<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\requser;
use DB;


class SignUpController extends Controller
{

    public function signUp(Request $request) 
    {
        //
         $Validator=  Validator::make($request->all(),[

            'name' =>'required',
            'email' =>'required',
            'mobile' =>'required',
            'code' =>'required',
            'level' =>'required',
            'id' =>'required',
            'type' =>'required',
           
        ])->validate();

        if (DB::table('users')->where("email", '=',  $request->email)->exists() || 
            (DB::table('usesr')->where("code", '=',  $request->code)->exists()) 
           ) 
            {

             return redirect()->back()->with('fail','msg');

            }else{


        $user = new requser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->code = $request->code;
        $user->level = $request->level;
        $user->user_id = $request->id; 
        $user->type = $request->type;
        $user->save();
        return redirect()->back()->with('success' , 'msg');


     }
}
}
