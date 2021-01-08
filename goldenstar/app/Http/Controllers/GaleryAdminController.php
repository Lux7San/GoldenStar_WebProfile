<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class GaleryAdminController extends Controller
{
    
    public function __construct()
    {
        $this->Galery = new Galery();
    }

    public function index(){
        $data =[
            'galery' => $this->Galery->allData(),
        ];
        return view('admin.galery.index', $data);
    }

    public function create(Request $request){
        $file = Request()->image;
        $fileName = $file->getClientOriginalName().'.'. $file->extension();
        $file->move(public_path('Galery'), $fileName);

        $data = [
            'galery_name'=> Request()->galery_name,
            'image'=> $fileName,
        ];

        $this->Galery->addData($data);
        return redirect()->route('galery')->with('sukses','Data Berhasil Di Masukkan');
    }

    public function delete($id){
        $this->Galery->deleteData($id);
        return redirect()->route('galery')->with('sukses','Data Berhasil Di Hapus');
    }
}
