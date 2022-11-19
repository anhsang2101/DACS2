<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\Business;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    private $ap,$bs;
    public function __construct(){
        $this->ap = new Applicants();
        $this->bs = new Business();
    }

    public function signUpAp(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:applicants',
            'password' => 'required',
            'confirmPassword' => 'required'
        ],[
            'name.required' => 'Vui lòng nhập họ tên',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email đã tồn tại',
            'confirmPassword.required' => 'Vui lòng nhập lại mật khẩu',
        ]);
        

        $dataInsert = [
            $request->name,
            $request->email,
            $request->password,
        ];

        $this->ap->signUp($dataInsert);
        return redirect()->route('ap.signup')->with('msg', 'Đăng ký thành công');
    }

    public function signUpBs(Request $request){
        $request->validate([
            'email' => 'required|unique:businesses',
            'password' => 'required',
            'confirmPassword' => 'required',

            'namePersonal' => 'required',
            // 'phonePersonal' => 'required|regex:/(0)[0-9]{9}/',
            // 'phoneBusiness' => 'required|regex:/(0)[0-9]{9}/',
            'phonePersonal' => 'required',
            'phoneBusiness' => 'required',
            'nameBusiness' => 'required',
            'introduceBusiness' => 'required',
            'personnelSize' => 'required',
            'location' => 'required',

        ],[

            'password.required' => 'Vui lòng nhập mật khẩu',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email đã tồn tại',
            'confirmPassword.required' => 'Vui lòng nhập lại mật khẩu',
            'namePersonal.required' => 'Vui lòng nhập họ tên nhà tuyển dụng',
            'phonePersonal.required' => 'Vui lòng nhập số điện thoại cá nhân',
            'phoneBusiness.required' => 'Vui lòng nhập số điện thoại công ty',
            'nameBusiness.required' => 'Vui lòng nhập tên công ty',
            'phonePersonal.regex' => 'Định dạng sai',
            'phoneBusiness.regex' => 'Định dạng sai',
            'introduceBusiness.required' => 'Vui lòng nhập mô tả công ty',
            'personnelSize.required' => 'vui lòng nhập quy mô',
            'location.required' => 'Vui lòng nhập địa điểm',
            
        ]);
        

        $dataInsert = [
            $request->email,
            $request->password,
            $request->namePersonal,
            $request->phonePersonal,
            $request->gender,
            $request->nameBusiness,
            $request->phoneBusiness,
            $request->introduceBusiness,
            $request->personnelSize,
            $request->location,
        ];

        $this->bs->signUp($dataInsert);
        return redirect()->route('bs.signup')->with('msg', 'Đăng ký thành công');
        // dd($request->all());
    }
}
