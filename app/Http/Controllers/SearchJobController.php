<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchJobController extends Controller
{
    public function index( Request $request)
    {
        //dd($request->major);
        $position=$request->keyword;
        $major=$request->major;
        $area=$request->area;
        $rank=$request->rank;
        $type=$request->type;
        $wage=$request->wage;
        //dd($major);
        if (!empty($position)) {
            $result = DB::table('recruitments')->where('position', $request->keyword)->paginate(15);
        }
        else if (!empty($major)) {
            $result = DB::table('recruitments')->where('major', $request->major)->paginate(15);
        }
        else if (!empty($area)) {
            $result = DB::table('recruitments')->where('area', $request->area)->paginate(15);
        }
        else if (!empty($rank)) {
            $result = DB::table('recruitments')->where('rank', $request->rank)->paginate(15);
        }
        else if (!empty($type)) {
            $result = DB::table('recruitments')->where('type', $request->type)->paginate(15);
        }
        else if (!empty($wage)) {
            $result = DB::table('recruitments')->where('wage', $request->wage)->paginate(15);
        }
        return view('ap.search-job', compact('result'));
    }
}
