<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YtLink;

class YtLinkController extends Controller
{
    public function __construct()
    {
        $this->YtLink = new YtLink();
    }
    
    public function index(){
        $data =[
            'ytLink' => $this->YtLink->allData(),
        ];
        return view('user.ytLink.index', $data);
    }
}
