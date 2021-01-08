<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->Profile = new Profile();
    }
    
    public function index(){
        $data =[
            'profile' => $this->Profile->allData(),
        ];
        return view('user.profile.index', $data);
    }

    public function detail($id){
        $data =[
            'profile' => $this->Profile->detailData($id),
        ];
        return view('user.profile.detail', $data);
    }
}
