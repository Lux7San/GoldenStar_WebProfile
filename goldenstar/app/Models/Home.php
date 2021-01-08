<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;

    protected $table1 = 'event';
    protected $table2 = 'profile';
    protected $table3 = 'galery';
    protected $table4 = 'yt-link';

    public function allDataEvent(){
        return DB::table('event')->get();
    }

    public function allDataProfile(){
        return DB::table('profile')->get();
    }

    public function allDataGallery(){
        return DB::table('galery')->get();
    }

    public function allDataYtLink(){
        return DB::table('yt-link')->get();
    }
}
