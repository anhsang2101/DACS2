<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Recruitment;

class AdminRecruitmentController extends Controller
{
    private $recruitments;
    public function __construct()
    {

        $this->recruitments = new Recruitment();
    }
    public function viewAccept()
    {
        $listAll = DB::table('recruitments')->where('isAccept', '2')->paginate(15);
        return view('ad.manage-recruitments-accept')->with(compact('listAll'));
    }

    public function viewWait()
    {
        $listAll = DB::table('recruitments')->where('isAccept', '1')->paginate(15);
        return view('ad.manage-recruitments-wait')->with(compact('listAll'));
    }

    public function viewReject()
    {
        $listAll = DB::table('recruitments')->where('isAccept', '0')->paginate(15);
        return view('ad.manage-recuitments-reject')->with(compact('listAll'));
    }

    public function accept($id)
    {
        $this->recruitments->accept($id);

        return back();
    }
    public function reject($id)
    {
        $this->recruitments->reject($id);
        return back();
    }
}
