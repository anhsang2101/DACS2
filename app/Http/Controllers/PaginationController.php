<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Recruitment;
class PaginationController extends Controller
{
    private $recruitment;
    public function __construct(){

        $this->recruitment = new Recruitment(); 
    }
    public function index(){

        $listAll =  DB::table('recruitments')->paginate(15);
        
        return view('ap.pagination')->with(compact('listAll'));
    }
}
