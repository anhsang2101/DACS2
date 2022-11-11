<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;

class PostRecruitmentController extends Controller
{
    //
    private $recruitment;
    public function __construct(){
        $this->recruitment = new Recruitment();
    }

    // public function index(Request $request){
    //     $request->validate([
    //         'email' => 'required|unique:businesses',
    //         'password' => 'required',
    //         'confirmPassword' => 'required',

    //         'namePersonal' => 'required',
    //         // 'phonePersonal' => 'required|regex:/(0)[0-9]{9}/',
    //         // 'phoneBusiness' => 'required|regex:/(0)[0-9]{9}/',
    //         'phonePersonal' => 'required|',
    //         'phoneBusiness' => 'required|',
    //         'nameBusiness' => 'required',
    //     ],[

    //         'password.required' => 'Vui lòng nhập mật khẩu',
    //         'email.required' => 'Vui lòng nhập email',
    //         'email.unique' => 'Email đã tồn tại',
    //         'confirmPassword.required' => 'Vui lòng nhập lại mật khẩu',
    //         'namePersonal.required' => 'Vui lòng nhập họ tên nhà tuyển dụng',
    //         'phonePersonal.required' => 'Vui lòng nhập số điện thoại cá nhân',
    //         'phoneBusiness.required' => 'Vui lòng nhập số điện thoại công ty',
    //         'nameBusiness.required' => 'Vui lòng nhập tên công ty',
    //         'phonePersonal.regex' => 'Định dạng sai',
    //         'phoneBusiness.regex' => 'Định dạng sai',
            
    //     ]);
        

    //     $dataInsert = [
    //         $request->email,
    //         $request->password,
    //         $request->namePersonal,
    //         $request->phonePersonal,
    //         $request->phoneBusiness,
    //         $request->gender,
    //         $request->nameBusiness,
    //     ];

    //     $this->bs->signUp($dataInsert);
    //     return redirect()->route('bs.signup')->with('msg', 'Đăng ký thành công');
    //     // dd($request->all());
    // }

}
