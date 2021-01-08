<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventAdminController extends Controller
{
    public function __construct()
    {
        $this->Event = new Event();
    }
    
    public function index(){
        $data =[
            'event' => $this->Event->allData(),
        ];
        return view('admin.event.index', $data);
    }

    public function create(Request $request){
        $file = Request()->image;
        $fileName = Request()->nama_acara.'.'. $file->extension();
        // $fileName = $file->getClientOriginalName().'.'. $file->extension();
        $file->move(public_path('Event_img'), $fileName);

        $data = [
            'nama_acara'=> Request()->nama_acara,
            'tanggal'=> Request()->tanggal,
            'link'=> Request()->link,
            'image'=> $fileName,
        ];

        $this->Event->addData($data);
        return redirect()->route('event')->with('sukses','Data Berhasil Di Masukkan');
    }

    public function update($id){
        if(Request()->image <> ""){
            //jika ingin mengganti foto
            $file = Request()->image;
            $fileName = Request()->nama_acara.'.'. $file->extension();
            $file->move(public_path('Event_img'), $fileName);

            $data = [
                'nama_acara'=> Request()->nama_acara,
                'tanggal'=> Request()->tanggal,
                'link'=> Request()->link,
                'image'=> $fileName,
            ];

            $this->Event->editData($id, $data);
        }else{
            //jika tidak ingin menambahkan image
            $data = [
                'nama_acara'=> Request()->nama_acara,
                'tanggal'=> Request()->tanggal,
                'link'=> Request()->link,
            ];

            $this->Event->editData($id, $data);
        }

        return redirect()->route('event')->with('sukses','Data Berhasil Di Masukkan');
    }

    public function edit($id){
        if (!$this->Event->detailData($id)){
            about(404);
        }
        $data = [
            'event' => $this->Event->detailData($id),
        ];
        return view('admin.event.update', $data);
    }


    public function delete($id){
        $this->Event->deleteData($id);
        return redirect()->route('event')->with('sukses','Data Berhasil Di Hapus');
    }
}
