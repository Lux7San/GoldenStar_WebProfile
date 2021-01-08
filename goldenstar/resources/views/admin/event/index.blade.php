@extends('admin.layouts.master')
@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Event</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#create"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Acara</th>
                                            <th>Image</th>
                                            <th>Tanggal</th>
                                            <th>Link</th>
                                            <!-- <th>Acara di Buat</th>
                                            <th>Terakir di Update</th> -->
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($event as $e)
                                    <tr>
                                        <td>{{$e->nama_acara}}</a></td>
                                        <td><img src="{{ url('Event_img/'.$e->image) }}" width="150px" ></a></td>
                                        <td>{{$e->tanggal}}</td>
                                        <td>{{$e->link}}</td>
                                        <td>
                                            <a href="/admin/event/edit/{{$e->id}}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/admin/event/delete/{{$e->id}}" class="btn btn-danger btn-sm" onclick="return confirm('You want delete this data ?')">Delete</a>
                                            <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-targe="#delete">
                                                Delete
                                            </button> -->
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
            <form action="/admin/event/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Acara</label>
                <input name="nama_acara" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Acara">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Event</label>
                <input name="tanggal" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input name="image" type="file" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Link</label>
                <textarea name="link" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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