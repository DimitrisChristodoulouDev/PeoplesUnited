<?php

namespace App\Http\Controllers;

use App\UserLogin;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public static function login(Request $request)
    {
        $user = UserLogin::where('email', $request->email)
            ->where('password', $request->password)
            ->get();

        if (count($user) == 1) {
            $rtn = ['status' => 1, 'AuthToken' => $user[0]->token, 'type' => 'ADMIN'];
        } else {
            $rtn = ['status' => 0];
        }
        return response()->json($rtn, 200);
    }

}