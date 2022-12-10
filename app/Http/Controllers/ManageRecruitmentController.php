<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;

class ManageRecruitmentController extends Controller
{
    private $recruitment;
    public function __construct()
    {

        $this->recruitment = new Recruitment();
    }
    public function viewManageRecruitment(){
        if(session()->has('emailSessionBs')){
            $emailBs = session()->get('emailSessionBs');

            $list = $this->recruitment->listByEmail($emailBs);
            
            return view('bs.manage-recruitment')->with(compact('list'));
        }
        else{
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập để sử dụng chức năng này');
        }
    }
}
