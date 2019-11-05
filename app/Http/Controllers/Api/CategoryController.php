<?php

namespace App\Http\Controllers\Api;

use App\AppConfig;
use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


/**
 * Class CategoryController
 *
 * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
 * @package App\Http\Controllers\Api
 */
class CategoryController extends Controller {


    /**
     * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
     * @param Request $request
     * @return array
     */
    public function test(Request $request) {

        return array(
            'token'    => csrf_token(),
            'dt'    => 'hi',
        );
    }


    /**
     *
     * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
     * @param Request $request
     * @return array
     */
    public function __getList(Request $request) {

        $cat = Category::select('id', 'name')->get();

        return array(
            'dt'    => $cat,
            'msg'    => 'retrieved successfully.',
            'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
        );
    }


    /**
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


    /**
     *
     * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
     * @param Request $request
     * @param         $idd
     * @return array|\Illuminate\Support\MessageBag
     */
    public function __update(Request $request, $idd){

        $rules = array(
            'name'  => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return $validator->errors();
        }

        $cat    = Category::find($idd);
        $name   = $request->get('name');

        if($cat->name != $name) {

            $cat->name = $name;

            $cat->save();

            return array(
                'msg'    => 'Successful',
                'dt'    => $cat,
                'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
            );
        }

        return array(
            'msg'    => 'Nothing changed!',
            'dt'    => $cat,
            'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
        );
    }


    /**
     *
     * @author Md. Atiqur Rahman <atiqur.su@gmail.com, atiqur@shaficonsultancy.com>
     * @param Request $request
     * @param         $idd
     * @return array
     */
    public function __delete(Request $request, $idd){


        $cat    = Category::find($idd);

        if(empty($cat)) {

            return array(
                'msg'    => 'Deletion failed, due to category not exists by this id.',
                'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
            );
        }

        $cat->delete();

        return array(
            'msg'    => 'Successfully deleted',
            'dt'    => $idd,
            'result' => AppConfig::GENERAL_RETURN_RESULT_OK,
        );
    }

}
