@extends('admin.layouts.master')
@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        

                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-info text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">{{ $event }}</div>
                                                <div class="stat-panel-title text-uppercase">Event</div>
                                                <hr>
                                                <a href="/admin/event" class="text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-info text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">{{$profile}}</div>
                                                <div class="stat-panel-title text-uppercase">Profile</div>
                                                <hr>
                                                <a href="/admin/profile" class="text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-info text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">{{$gallery}}</div>
                                                <div class="stat-panel-title text-uppercase">Gallery</div>
                                                <hr>
                                                <a href="/admin/galery" class="text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-info text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">{{$ytLink}}</div>
                                                <div class="stat-panel-title text-uppercase">Youtube</div>
                                                <hr>
                                                <a href="/admin/yt-link" class="text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                    </div>
                </div>
            </div>
        </div>
</div>

@stop