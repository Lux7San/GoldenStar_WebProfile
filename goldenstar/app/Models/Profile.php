<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    // use HasFactory;
    public function allData(){
        return DB::table('profile')->get();
    }

    Public function addData($data){
        return DB::table('profile')->insert($data);
    }

    public function detailData($id){
        return DB::table('profile')->where('id',$id)->first();
    }

    public function editData($id, $data){
        DB::table('profile')
            ->where('id', $id)
            ->update($data);
    }

    public function deleteData($id){
        DB::table('profile')
            ->where('id', $id)
            ->delete();
    }
}
