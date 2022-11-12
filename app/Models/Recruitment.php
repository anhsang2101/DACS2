<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recruitment extends Model
{
    use HasFactory;

    // public function signIn($dataInsert){
    //     $ap = DB::select('SELECT * FROM applicants WHERE email=? and password=?', $dataInsert);
    //     return $ap;
    // }

    public function post($dataInsert){
        DB::insert('INSERT INTO recruitments (`name`,`position`,`area`,`title`,`major`,`type`,`gender`,`rank`,`exp`,`currency`,`wage`,`detail`,`require`,`benefit`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)', $dataInsert);

    }
}
