<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YtLink;

class YtLinkAdminController extends Controller
{
    public function __construct()
    {
        $this->YtLink = new YtLink();
    }
    
    public function index(){
        $data =[
            'ytLink' => $this->YtLink->allData(),
        ];
        return view('admin.ytLink.index', $data);
    }

    public function create(Request $request){
        $file = Request()->thumbnails_img;
        $fileName = Request()->title_yt.'.'. $file->extension();
        $file->move(public_path('YtLink'), $fileName);

        $data = [
            'title_yt'=> Request()->title_yt,
            'link_yt'=> Request()->link_yt,
            'thumbnails_img'=> $fileName,
        ];

        $this->YtLink->addData($data);
        return redirect()->route('yt-link')->with('sukses','Data Berhasil Di Masukkan');
    }

    public function delete($id){
        $this->YtLink->deleteData($id);
        return redirect()->route('yt-link')->with('sukses','Data Berhasil Di Hapus');
    }
}
