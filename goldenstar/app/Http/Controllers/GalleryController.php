<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;


class GalleryController extends Controller
{
    public function __construct()
    {
        $this->Galery = new Galery();
    }

    public function index(){
        $data =[
            'galery' => $this->Galery->allData(),
        ];
        return view('user.gallery.index', $data);
    }

    public function detail($id){
        $data =[
            'galery' => $this->Galery->detailData($id),
        ];
        return view('user.gallery.detail', $data);
    }
}
