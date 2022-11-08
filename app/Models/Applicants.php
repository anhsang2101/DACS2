<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Applicants extends Model
{
    use HasFactory;

    public function signIn($dataInsert){
        $ap = DB::select('SELECT * FROM applicants WHERE email=? and password=?', $dataInsert);
        return $ap;
    }

    public function signUp($dataInsert){
        DB::insert('INSERT INTO applicants (name,email,password) VALUES (?,?,?)', $dataInsert);

    }


}
