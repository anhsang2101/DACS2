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

    public function post($dataInsert){
        DB::insert('INSERT INTO recruitments (`email`,`nameBusiness`,`name`,`position`,`area`,`title`,`major`,`type`,`gender`,`rank`,`exp`,`currency`,`wage`,`detail`,`require`,`benefit`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', $dataInsert);

    }
}
