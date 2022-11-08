<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    private $ap;
    public function __construct(){
        $this->ap = new Applicants();
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
        return redirect()->route('ap.signup')->with('msg', 'Them thanh cong');
    }

    public function signUpBs(Request $request){

        dd($request->all());
    }
}
