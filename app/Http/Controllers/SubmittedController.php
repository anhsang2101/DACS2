<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubmittedController extends Controller
{
    public function index(Request $request){

        // $request->validate([
        //     // 'phonel' => 'required|regex:/(0)[0-9]{9}/',
        //     'phone' => 'required',
        //     'edu' => 'required',
        //     'exp' => 'required',
        //     'skill' => 'required',
        //     'obj' => 'required',

        // ],[

        //     'phone.required' => 'Vui lòng nhập số điện thoại',
        //     'phone.regex' => 'Định dạng sai',
        //     'edu.required' => 'Vui lòng nhập học vấn của bạn',
        //     'exp.required' => 'Vui lòng nhập kinh nghiệp thực tế của bạn',
        //     'skill.required' => 'Vui lòng nhập kỹ năng',
        //     'obj.required' => 'Vui lòng nhập mục tiêu',
            
        // ]);
        

        $dataInsert = [
            Session::get('sessionAccount')[0]->id,
            // Session::get('detailbusiness')[0]->id,
            // Session::get('detail')[0]->id,
            $request->edu,
            $request->exp,
            $request->skill,
            $request->obj,
        ];



        var_dump($dataInsert);
        // $this->bs->signUp($dataInsert);
        // return redirect()->route('/ap.detail-job')->with('msg', 'Đăng ký thành công');
        // dd($request->all());
    }
}
