<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class YtLink extends Model
{
    /// use HasFactory;
    public function allData(){
        return DB::table('yt-link')->get();
    }

    Public function addData($data){
        return DB::table('yt-link')->insert($data);
    }

    public function deleteData($id){
        DB::table('yt-link')
            ->where('id', $id)
            ->delete();
    }
}
