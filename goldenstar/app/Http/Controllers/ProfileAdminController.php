<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileAdminController extends Controller
{
    public function __construct()
    {
        $this->Profile = new Profile();
    }
    
    public function index(){
        $data =[
            'profile' => $this->Profile->allData(),
        ];
        return view('admin.profile.index', $data);
    }

    public function create(Request $request){
        $file = Request()->pp;
        $fileName = Request()->profile_name.'.'. $file->extension();
        $file->move(public_path('Profile_img'), $fileName);

        $data = [
            'profile_name'=> Request()->profile_name,
            'email'=> Request()->email,
            'alamat'=> Request()->alamat,
            'no_telp'=> Request()->no_telp,
            'pp'=> $fileName,
        ];

        $this->Profile->addData($data);
        return redirect()->route('profile')->with('sukses','Data Berhasil Di Masukkan');

    }

    public function edit($id){
        if (!$this->Profile->detailData($id)){
            about(404);
        }
        $data = [
            'profile' => $this->Profile->detailData($id),
        ];
        return view('admin.profile.update', $data);
    }

    public function update($id){
        if(Request()->pp <> ""){
            //jika ingin mengganti foto
            $file = Request()->pp;
            $fileName = Request()->profile_name.'.'. $file->extension();
            $file->move(public_path('Profile_img'), $fileName);

            $data = [
                'profile_name'=> Request()->profile_name,
                'email'=> Request()->email,
                'alamat'=> Request()->alamat,
                'no_telp'=> Request()->no_telp,
                'pp'=> $fileName,
            ];

            $this->Profile->editData($id, $data);
        }else{
            //jika tidak ingin menambahkan image
            $data = [
                'profile_name'=> Request()->profile_name,
                'email'=> Request()->email,
                'alamat'=> Request()->alamat,
                'no_telp'=> Request()->no_telp,
            ];

            $this->Profile->editData($id, $data);
        }

        return redirect()->route('profile')->with('sukses','Data Berhasil Di Masukkan');
    }

    public function delete($id){
        $this->Profile->deleteData($id);
        return redirect()->route('profile')->with('sukses','Data Berhasil Di Hapus');
    }
}