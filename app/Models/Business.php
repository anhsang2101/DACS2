<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Business extends Model
{
    use HasFactory;
    
    public function signIn($dataInsert){
        $bs = DB::select('SELECT * FROM businesses WHERE email=? and password=?', $dataInsert);
        return $bs;
    }

    public function signUp($dataInsert){
        DB::insert('INSERT INTO businesses (email,`password`,namePersonal,phonePersonal,gender,nameBusiness,phoneBusiness,introduceBusiness,personnelSize,`location`) VALUES (?,?,?,?,?,?,?,?,?,?)', $dataInsert);

    } 

    public function getBusinessByEmail($email){
        $bs = DB::select('SELECT * FROM businesses WHERE email=?', [$email]);
        return $bs;
    }
}
