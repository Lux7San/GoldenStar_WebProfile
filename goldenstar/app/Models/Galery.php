<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Galery extends Model
{
    // use HasFactory;

    public function allData(){
        return DB::table('galery')->get();
    }

    Public function addData($data){
        return DB::table('galery')->insert($data);
    }

    public function detailData($id){
        return DB::table('galery')->where('id',$id)->first();
    }

    public function deleteData($id){
        DB::table('galery')
            ->where('id', $id)
            ->delete();
    }
}
