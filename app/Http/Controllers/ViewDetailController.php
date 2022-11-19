<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Recruitment;
use Illuminate\Http\Request;

class ViewDetailController extends Controller
{
    private $recruitment;
    private $business;
    public function __construct()
    {

        $this->recruitment = new Recruitment();
        $this->business = new Business();
    }

    public function index($id)
    {
        if (session()->has('sessionAccount')) {
            $detail = $this->recruitment->getDetail($id);

            $detailbusiness = $this->business->getBusinessByEmail($detail[0]->email);

            return view('ap.detail-job')->with(compact('detail', 'detailbusiness'));
        } else {
            return redirect()->route('ap.signin')->with('msg', 'Bạn phải đăng nhập trước khi ứng tuyển');
        }
    }
}
