@extends('user.layouts.master')
@section('content')
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <center>
            <div class="group btmspace-50 demo">
                <ul class="nospace group prices">
                    <li class="one_half first"><img src="{{ url('Profile_img/'.$profile->pp) }}" width="100px" height="200px"></li>
                    <li class="one_half">
                    <h1 class="heading">Data Profile</h1>
                    <pre><h3 align="left" class="heading">Nama       : {{$profile->profile_name}}</h3></pre>
                    <pre><h3 align="left" class="heading">Email      : {{$profile->email}}</h3></pre>
                    <pre><h3 align="left" class="heading">Alamat     : {{$profile->alamat}}</h3></pre>
                    <pre><h3 align="left" class="heading">No. Telp   : {{$profile->no_telp}}</h3></pre>
                    </li>
                </ul>
            </div>
        </center>
    </main>
</div>
@stop