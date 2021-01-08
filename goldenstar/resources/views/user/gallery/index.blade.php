@extends('user.layouts.master')
@section('content')
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Gallery Golden Star Malang</header>
          <ul class="nospace group prices">
          @foreach($galery as $g)
          <li class="one_third">
            <article><a href="#"></a><img src="{{ url('Galery/'.$g->image) }}"></a></i>
              <footer><a class="btn" href="galery/detail/{{$g->id}}">Details</a></footer>
            </article>
          </li>
          @endforeach
          <figcaption>Berisikan Gallery-gallery Aktivitas Golden Star Malang</figcaption>
        </figure>
      </div>
      
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

@stop