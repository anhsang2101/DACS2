<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewHomeController extends Controller
{   
    private $recruitment;
    public function __construct(){

        $this->recruitment = new Recruitment(); 
    }
    
    public function index(){

        $listAll =  DB::table('recruitments')->where('isAccept', '2')->paginate(15);
        
        return view('ap.index')->with(compact('listAll'));
    }
}
