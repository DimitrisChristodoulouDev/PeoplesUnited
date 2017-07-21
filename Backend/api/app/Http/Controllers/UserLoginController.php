<?php

namespace App\Http\Controllers;

use App\UserLogin;
use Illuminate\Http\Request;

class UserLoginController extends Controller {

$user = new UserLogin();



    public function login(Request $request){
        $user->where('email', $request->email)
                ->where('password', $request->password)
                ->get();

        if(count($user) == 1){
            $rtn = ['status'=> 1, 'AuthToken' => $user[0]->token, 'type' => 'ADMIN'];
        }else{
            $rtn = ['status'=> 0];
        }
        return response()->json($rtn, 200);
    }

    public function forgotPassword(Request $request){
        $user = new UserLogin();
        $user->where('email', $request->email)
            ->get();

        if(count($user) == 1){
            //send email
            $rtn = ['status'=> 1];
        }else{
            $rtn = ['status'=> 0];
        }
        return response()->json($rtn, 200);
    }

}