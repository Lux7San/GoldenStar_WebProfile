<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    // use HasFactory;
    public function allData(){
        return DB::table('event')->get();
    }

    Public function addData($data){
        return DB::table('event')->insert($data);
    }
    
    public function detailData($id){
        return DB::table('event')->where('id',$id)->first();
    }

    public function editData($id, $data){
        DB::table('event')
            ->where('id', $id)
            ->update($data);
    }

    public function deleteData($id){
        DB::table('event')
            ->where('id', $id)
            ->delete();
    }


}
