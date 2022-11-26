<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Submitted extends Model
{
    use HasFactory;


    public function validate($appid, $jobid){
        $list = DB::select('SELECT * FROM submitteds WHERE appid = ? and jobid = ?', [$appid, $jobid]);
        return $list;
    }

    public function listAll($id){
        $listAll = DB::select('SELECT * FROM submitteds INNER JOIN recruitments ON submitteds.jobid=recruitments.id WHERE appid = ?', [$id]);
        return $listAll;
    }

    public function submittedApplicant($dataInsert){
        DB::insert('INSERT INTO submitteds (`jobid`,appid,businessid,edu,`exp`,skill,obj,`status`) VALUES (?,?,?,?,?,?,?,?)', $dataInsert);
    } 

}
