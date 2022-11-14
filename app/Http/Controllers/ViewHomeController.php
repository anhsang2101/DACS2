<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;

class ViewHomeController extends Controller
{   
    private $recruitment;
    public function __construct(){

        $this->recruitment = new Recruitment(); 
    }
    
    public function index(){

        $listAll = $this->recruitment->listAll();
        
        return view('ap.index')->with(compact('listAll'));
    }
}
