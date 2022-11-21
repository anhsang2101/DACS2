<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Submitted extends Model
{
    use HasFactory;

    public function submittedApplicant($dataInsert){
        DB::insert('INSERT INTO submitteds (`jobid`,appid,businessid,edu,`exp`,skill,obj) VALUES (?,?,?,?,?,?,?)', $dataInsert);
    } 

}
