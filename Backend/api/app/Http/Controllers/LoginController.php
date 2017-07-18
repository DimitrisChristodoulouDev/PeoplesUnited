<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function register(Request $request){
        if($request['email'] == 'test@gmail.com'){
            return response()->json(['status'=>0, 'msg'=>'User Already Exists!']);
        } else {
            return response()->json(['status'=>1]);
        }
        //TODO: Create user
        //TODO: Laravel ajax response for error

    }

    public function forgot(Request $request){

        if($request['email'] == 'test@gmail.com' && $request['password'] == '1234'){
            return response()->json(['status'=>1]);
        }else{
            return response()->json(['status'=>0]);
        }
    }
}
