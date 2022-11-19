<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\Business;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    //
    private $ap,$bs;
    public function __construct()
    {
        $this->ap = new Applicants();
        $this->bs = new Business();
    }

    public function signInAp(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'password.required' => 'Vui lòng nhập mật khẩu',
            'email.required' => 'Vui lòng nhập email',
        ]);


        $dataInsert = [
            $request->email,
            $request->password,
        ];



        if (!empty($this->ap->signIn($dataInsert))) {
            $sessionAcccount = $this->ap->signIn($dataInsert)[0];

            session()->push('sessionAccount', $sessionAcccount);
            return redirect()->route('ap.index');
        } else {
            return redirect()->route('ap.signin')->with('msg', 'Sai mật khẩu');
        }

        // dd($this->ap->signIn($dataInsert));
    }

    public function signInBs(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'password.required' => 'Vui lòng nhập mật khẩu',
            'email.required' => 'Vui lòng nhập email',
        ]);


        $dataInsert = [
            $request->email,
            $request->password,
        ];



        if (!empty($this->bs->signIn($dataInsert))) {
            $nameSessionAcccountBs = $this->bs->signIn($dataInsert)[0]->namePersonal;
        
            session()->put('nameSessionBs', $nameSessionAcccountBs);
            session()->put('emailSessionBs', $request->email);
            
            return redirect()->route('bs.index')->with('msg', $request->email);
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Sai mật khẩu');

            dd($request->all());
        }
    }
}
