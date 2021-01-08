@extends('admin.layouts.master')
@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Youtube Link</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#create"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Judul Youtube</th>
                                            <th>Thumbnails</th>
                                            <th>Link</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ytLink as $yl)
                                    <tr>
                                        <td>{{$yl->title_yt}}</a></td>
                                        <td>{{$yl->link_yt}}</td>
                                        <td><img src="{{ url('ytLink/'.$yl->thumbnails_img) }}" width="150px"></a></td>
                                        <td>
                                            <a href="/admin/yt-link/delete/{{$yl->id}}" class="btn btn-danger btn-sm" onclick="return confirm('You want Delete this data ?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- form -->
            <form action="/admin/yt-link/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Judul Youtube</label>
                <input name="title_yt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Acara">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Link Youtube</label>
                <textarea name="link_yt" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Thumbnails</label>
                <input name="thumbnails_img" type="file" class="form-control">
            </div>

            <!-- tutup form -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
    </div>      
@stop