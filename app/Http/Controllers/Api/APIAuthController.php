<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIAuthController extends Controller {


    /**
     * @author Md. Atiqur Rahman <atiq.cse.cu0506.su@gmail.com, atiqur@shaficonsultancy.com>
     * @return \Illuminate\Http\JsonResponse
     */
    public function login() {

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){

            $user = Auth::user();

            $success['token'] =  $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], 200);
        }

        return response()->json(['error'=>'Unauthorised'], 401);
    }


}
