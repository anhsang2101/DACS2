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

    public function listAll(){
        $listAll = DB::select('SELECT * FROM businesses ');
        return $listAll;
    }
    

    public function editBs($dataInsert){
        DB::update('UPDATE `businesses` SET ... WHERE `id` = ?', $dataInsert); // not yet
    }

    public function deleteBs($id){
        return DB::delete('DELETE FROM businesses WHERE `id`=?',[$id]);
    }

    public function count(){
        return DB::select('SELECT COUNT(*) FROM businesses');
    
    }
    public function listAllCompany()
    {
        $list = DB::table('businesses')->select('id', 'nameBusiness', 'introduceBusiness')->paginate(15);
        return $list;
    }
    public function search($keyword)
    {
        $list = DB::table('businesses')->select('id', 'nameBusiness', 'introduceBusiness')->where('nameBusiness', 'like','%' . $keyword . '%')->paginate(15);
        return $list;
    }
}
