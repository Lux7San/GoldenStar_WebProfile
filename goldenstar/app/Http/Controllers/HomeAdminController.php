<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use DB;

class HomeAdminController extends Controller
{
   public function index(){
        $event = DB::table('event')->count();
        $profile = DB::table('profile')->count();
        $gallery = DB::table('galery')->count();
        $ytLink = DB::table('yt-link')->count();
        return view('admin.home', compact('event','profile','gallery','ytLink'));
    }

    public function index2(){
        return view('user.home');
    } 
}
