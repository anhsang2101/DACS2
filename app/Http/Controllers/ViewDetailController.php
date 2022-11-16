<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;

class ViewDetailController extends Controller
{
    private $recruitment;
    public function __construct(){

        $this->recruitment = new Recruitment(); 
    }
    
    public function index($id){

        $detail = $this->recruitment->getDetail($id);
        
        return view('ap.detail-job')->with(compact('detail'));
    }
}
