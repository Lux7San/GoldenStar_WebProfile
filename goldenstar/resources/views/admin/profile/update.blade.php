@extends('admin.layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Update Data Profile</h3>
								</div>
								<div class="panel-body">
									<form action="/admin/profile/update/{{ $profile->id }}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="profile_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Depan" value="{{$profile->profile_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Belakang" value="{{$profile->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$profile->alamat}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Telp</label>
                                        <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Depan" value="{{$profile->no_telp}}">
                                    </div>

                                    <div class="col-sm 12">
                                        <label>Edit Foto Profile</label>
                                        <div class="col-sm 8">
                                            <img src="{{ url('Profile/'.$profile->pp) }}" width="150px">
                                        </div>
                                        <div class="col-sm 8">
                                            <div class="from-group">
                                                <input type="file" name="pp" class="from-Control">
                                                <div class="text-danger">
                                                    @error('pp')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-warning" onclick="return confirm('You want update this data ?')">Update</button>           
                                    </form>
								</div>
							</div>
                    </div>  
                </div>                    
            </div>
        </div>
</div>
@stop