<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    //
    public function signInAp(Request $request){
        dd($request->all());
    }

    public function signInBs(Request $request){
        dd($request->all());
    }
}
