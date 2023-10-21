<?php
/*
* @Name
* @Description
* @Author 余亚勇
* @Date 2023/10/21 14:22
*/

namespace Modules\Admin\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Admin\Http\Requests\TestRequest;

class IndexController extends Controller
{
    public function test(TestRequest $request): string
    {
//        dd($request->all());
//        $vali = Validator::make($request->all(), [
//            "title" => 'required|is_positive_integer',
//        ] , [
//            'title.is_positive_integer' => '这不是正整数'
//        ]);
//        dd($vali -> errors() -> messages());
        return 'hello world test';
    }
}
