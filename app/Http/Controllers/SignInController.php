<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    //
    public function index(Request $request){
        dd($request->all());
    }
}
