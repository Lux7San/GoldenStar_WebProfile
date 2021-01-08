@extends('admin.layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Update Data Event</h3>
								</div>
								<div class="panel-body">
									<form action="/admin/event/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Acara</label>
                                        <input name="nama_acara" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Depan" value="{{$event->nama_acara}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal</label>
                                        <input name="tanggal" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Belakang" value="{{$event->tanggal}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Link</label>
                                        <textarea name="link" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$event->link}}</textarea>
                                    </div>

                                    <div class="col-sm 12">
                                        <label>Edit Image</label>
                                        <div class="col-sm 8">
                                            <img src="{{ url('Event_img/'.$event->image) }}" width="150px">
                                        </div>
                                        <div class="col-sm 8">
                                            <div class="from-group">
                                                <input type="file" name="image" class="from-Control">
                                                <div class="text-danger">
                                                    @error('image')
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