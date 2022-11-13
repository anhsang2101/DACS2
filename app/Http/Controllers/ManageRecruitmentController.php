<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageRecruitmentController extends Controller
{
    //
    public function viewManageRecruitment(){
        if(session()->has('emailSessionBs')){
            return view('bs.manage-recruitment');
        }
        else{
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập để sử dụng chức năng này');
        }
    }
}
