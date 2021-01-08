@extends('user.layouts.master')
@section('content')
<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content">
            <center>
            <video width="1000" height="500" controls>
            <source src="{{asset('images/videoplayback.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
            </center>
        </div><br><br><br>

        <div class="group btmspace-50 demo">
            <li class="one_quarter first">
                <img class="imgl borderedbox inspace-5" src="{{asset('images/logo.jpeg')}}" weight="150px" alt="">
            </li>
            <li class="three_quarter">
                <p style="font-size:20px" align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </li>
        </div>
    </main>
</div>
@stop