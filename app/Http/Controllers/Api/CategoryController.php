<?php

namespace App\Http\Controllers\Api;

use App\AppConfig;
use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller {


    public function test(Request $request) {

        return array(
            'token'    => csrf_token(),
            'dt'    => 'hi',
        );
    }


    public function __getList(Request $request) {

        $cat = Category::select('name')->get();

        return array(
            'dt'    => $cat,
            'msg'    => 'retrieved successfully.',
            'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
        );


        /*

        if($request->ajax()) {

            $cat = Category::select('name')->all();

            return array(
                'dt'    => $cat,
                'msg'    => 'retrieved successfully.',
                'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
            );

        }

        return array(
            'msg'    => 'invalid request',
            'result' => AppConfig::GENERAL_RETURN_RESULT_NOT_OK,
        );

        //*/
    }

    public function __create(Request $request){

        $rules = array(
            'name'  => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return $validator->errors();
        }

        $post   = Category::create($request->all());


        return array(
            'msg'    => 'Successful',
            'dt'    => $post,
            'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
        );
    }

}
