<?php

namespace App\Http\Controllers;

use App\AppConfig;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller {


    /**
     *
     * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
     * @param Request $request
     * @return array
     */
    public function __getList(Request $request) {

        $cat = Category::select('name')->get();

        return array(
            'dt'    => $cat,
            'msg'    => 'retrieved successfully.',
            'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
        );
    }


    /**
     *
     *
     * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
     * @param Request $request
     * @return array|\Illuminate\Support\MessageBag
     */
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


