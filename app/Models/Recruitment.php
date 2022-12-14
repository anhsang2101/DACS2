<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recruitment extends Model
{
    use HasFactory;

    public function listAll(){
        $listAll = DB::select('SELECT * FROM recruitments');
        return $listAll;
    }

    public function getDetail($id){
        $detail = DB::select('SELECT * FROM recruitments WHERE `id` = ?', [$id]);
        return $detail;
    }

    public function post($dataInsert){
        DB::insert('INSERT INTO recruitments (`email`,`nameBusiness`,`name`,`position`,`area`,`title`,`major`,`type`,`gender`,`rank`,`exp`,`currency`,`wage`,`detail`,`require`,`benefit`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', $dataInsert);

    }

    public function listByEmail($email){
        $list = DB::select('SELECT * FROM recruitments WHERE `email` = ?', [$email]);
        return $list;
    }

    public function editRecruitment($dataInsert){
        DB::update('UPDATE `recruitments` SET `position`= ?,`rank` = ? ,major = ? ,exp = ?, wage = ?, `type` = ?, area = ?, gender = ? WHERE `id` = ?', $dataInsert); // not yet
    }

    public function deleteRecruitment($id){
        return DB::delete('DELETE FROM recruitments WHERE `id`=?',[$id]);
    }

}
