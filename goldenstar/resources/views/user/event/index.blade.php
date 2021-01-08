@extends('user.layouts.master')
@section('content')
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      
      <!-- ################################################################################################ -->
      
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Event Golden Star Malang</header>
          <ul class="nospace group prices">
          @foreach($event as $e)
          <li class="one_third">
            <article><img src="{{ url('Event_img/'.$e->image) }}" width="150px" height="150px"></a></i>
              <h1 class="heading">{{$e->nama_acara}}</h1>
              <h6>Waktu Event Dimulai : {{$e->tanggal}}</h6>
              <footer><a class="btn" href="{{$e->link}}">Details</a>
              
              </footer>

            </article>
          </li>
          @endforeach
          <figcaption>Berisikan Event-event yang akan dilaksanakan oleh Golden Star Malang</figcaption>
        </figure>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@stop