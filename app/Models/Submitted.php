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
        $listAll = DB::select('SELECT
        submitteds.id,
        submitteds.jobid,
        submitteds.appid,
        submitteds.businessid,
        submitteds.edu,
        submitteds.exp,
        submitteds.skill,
        submitteds.obj,
        submitteds.status,
        recruitments.email,
        recruitments.nameBusiness,
        recruitments.name,
        recruitments.position,
        recruitments.area,
        recruitments.title,
        recruitments.major,
        recruitments.type,
        recruitments.gender,
        recruitments.rank,
        recruitments.exp AS exprequired,
        recruitments.currency,
        recruitments.wage,
        recruitments.detail,
        recruitments.require,
        recruitments.benefit
    FROM
        submitteds
    INNER JOIN recruitments ON submitteds.jobid = recruitments.id
    WHERE
        appid = ?', [$id]);
        return $listAll;
    }

    public function listAllByJobId1($id){
        $listAll = DB::select('SELECT
        submitteds.id,
        submitteds.jobid,
        submitteds.appid,
        submitteds.businessid,
        applicants.email AS emailApp,
        applicants.name AS nameApp,
        submitteds.edu,
        submitteds.exp,
        submitteds.skill,
        submitteds.obj,
        submitteds.status,
        recruitments.email,
        recruitments.nameBusiness,
        recruitments.name,
        recruitments.position,
        recruitments.area,
        recruitments.title,
        recruitments.major,
        recruitments.type,
        recruitments.gender,
        recruitments.rank,
        recruitments.exp AS exprequired,
        recruitments.currency,
        recruitments.wage,
        recruitments.detail,
        recruitments.require,
        recruitments.benefit
    FROM
        submitteds
    INNER JOIN recruitments ON submitteds.jobid = recruitments.id INNER JOIN applicants ON applicants.id = submitteds.appid
    WHERE
        jobid = ? and recruitments.email=? and status = 1', [$id, session()->get('emailSessionBs')]);
        return $listAll;
    }

    public function listAllByJobId2($id){
        $listAll = DB::select('SELECT
        submitteds.id,
        submitteds.jobid,
        submitteds.appid,
        submitteds.businessid,
        applicants.email AS emailApp,
        applicants.name AS nameApp,
        submitteds.edu,
        submitteds.exp,
        submitteds.skill,
        submitteds.obj,
        submitteds.status,
        recruitments.email,
        recruitments.nameBusiness,
        recruitments.name,
        recruitments.position,
        recruitments.area,
        recruitments.title,
        recruitments.major,
        recruitments.type,
        recruitments.gender,
        recruitments.rank,
        recruitments.exp AS exprequired,
        recruitments.currency,
        recruitments.wage,
        recruitments.detail,
        recruitments.require,
        recruitments.benefit
    FROM
        submitteds
    INNER JOIN recruitments ON submitteds.jobid = recruitments.id INNER JOIN applicants ON applicants.id = submitteds.appid
    WHERE
        jobid = ? and status = 2', [$id]);
        return $listAll;
    }

    public function submittedApplicant($dataInsert){
        DB::insert('INSERT INTO submitteds (`jobid`,appid,businessid,edu,`exp`,skill,obj,`status`) VALUES (?,?,?,?,?,?,?,?)', $dataInsert);
    }

    
    public function editSubmitted($dataInsert){
        DB::update('UPDATE `submitteds` SET `edu`= ?,`exp` = ? ,skill = ? ,obj = ? WHERE `id` = ?', $dataInsert);
    }

    public function deleteSubmitted($id){
        return DB::delete('DELETE FROM submitteds WHERE `id`=?',[$id]);
    }

    public function setStatusYes($id){
        DB::update('UPDATE `submitteds` SET status = 2 WHERE `id` = ?', [$id]);
    }

    public function setStatusNo($id){
        DB::update('UPDATE `submitteds` SET status = 0 WHERE `id` = ?', [$id]);
    }
}
