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
          <header class="heading">youtube List Golden Star Malang</header>
          <ul class="nospace group prices">
          @foreach($ytLink as $yt)
          <li class="one_third">
            <article><img src="{{ url('YtLink/'.$yt->thumbnails_img) }}" width="150px" height="500px"></a></i>
              <h1 class="heading">{{$yt->title_yt}}</h6>
              <footer><a class="btn" href="{{$yt->link_yt}}">Details</a></footer>
            </article>
          </li>
          @endforeach
          <figcaption>Berisikan video yang telah di upload di Youtube Golden Star Malang</figcaption>
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@stop