<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->Event = new Event();
    }

    public function index(){
        $data =[
            'event' => $this->Event->allData(),
        ];
        return view('user.event.index', $data);
    }
}
