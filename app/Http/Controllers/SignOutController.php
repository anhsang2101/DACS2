<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignOutController extends Controller
{
    //

    public function signOutAp(Request $request){

        $request->session()->forget('nameSession');
        return redirect()->route('ap.index');
    }
}
