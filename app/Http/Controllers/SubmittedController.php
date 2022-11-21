<?php

namespace App\Http\Controllers;

use App\Models\Submitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubmittedController extends Controller
{

    private $submitted;
    public function __construct()
    {
        $this->submitted = new Submitted();
    }

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
            $request->jobid,
            Session::get('sessionAccount')[0]->id,
            $request->businessid,
            $request->edu,
            $request->exp,
            $request->skill,
            $request->obj,
        ];




        $this->submitted->submittedApplicant($dataInsert);
        
        return redirect()->back()->with('alertSuccess','Ứng tuyển thành công');
        // return redirect()->route('/ap.detail-job')->with('msg', 'Đăng ký thành công');
        // dd($request->all());
        // var_dump($dataInsert);
    }
}
