<?php

namespace App\Http\Controllers;

use App\Models\Submitted;
use Illuminate\Http\Request;

class ViewCensorshipController extends Controller
{
    //private $recruitment;
    private $submitted;
    public function __construct()
    {

        $this->submitted = new Submitted();
    }

    public function viewCensorship($id)
    {
        if (session()->has('emailSessionBs')) {

            $list = $this->submitted->listAllByBsId1($id);

            return view('bs.censorship')->with(compact('list'));
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khi ứng tuyển');
        }
    }

    public function viewCensorshipped($id)
    {
        if (session()->has('emailSessionBs')) {

            $list = $this->submitted->listAllByBsId2($id);

            return view('bs.censorshipped')->with(compact('list'));
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khi ứng tuyển');
        }
    }


    public function censorshipYes($id)
    {
        if (session()->has('emailSessionBs')) {

            $this->submitted->setStatusYes($id);

            return back();
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khi ứng tuyển');
        }
    }
    public function censorshipNo($id)
    {
        if (session()->has('emailSessionBs')) {

            $this->submitted->setStatusNo($id);

            return back();
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khi ứng tuyển');
        }
    }

}
