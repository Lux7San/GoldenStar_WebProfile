@extends('admin.layouts.master')
@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Profile Anggota</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#create"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Foto Profile</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($profile as $p)
                                    <tr>
                                        <td>{{$p->profile_name}}</a></td>
                                        <td><img src="{{ url('Profile_img/'.$p->pp) }}" width="150px"></a></td>
                                        <td>{{$p->email}}</td>
                                        <td>{{$p->alamat}}</td>
                                        <td>{{$p->no_telp}}</td>
                                        <td>
                                            <a href="/admin/profile/edit/{{$p->id}}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/admin/profile/delete/{{$p->id}}" class="btn btn-danger btn-sm" onclick="return confirm('You want Delete this data ?')">Delete</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- form -->
            <form action="/admin/profile/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Anggota</label>
                <input name="profile_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Anggota">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Foto Profile</label>
                <input name="pp" type="file" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">No. Telp</label>
                <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No. Telp">
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