<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class APIAuthController extends Controller {


    /**
     *
     * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request) {

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

            $user = Auth::user();

            $token = $user->createToken()->api_token;

            $result = [
                'token' => $token,
                'user'  => $user,
            ];

            return response()->json($result, 200);
        }

        return response()->json(['error' => 'Unauthorised'], 401);
    }


    /**
     *
     * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $success['token'] = $user->createToken()->api_token;
        $success['name'] = $user->name;

        $result = [
            'name'  => $user->name,
            'token' => $user->createToken()->api_token,
        ];


        return response()->json($result, 200);
    }


}
