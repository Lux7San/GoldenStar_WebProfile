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
          <header class="heading">Profile Anggota Golden Star Malang</header>
          <div id="gallery">
          <ul class="nospace group prices">
          @foreach($profile as $p)
          <li class="one_third">
            <article><img src="{{ url('Profile_img/'.$p->pp) }}" width="150px" height="500px"></a></i>
              <h1 class="heading">{{$p->profile_name}}</h6>
              <footer><a class="btn" href="/profile/detail/{{$p->id}}">Details</a></footer>
            </article>
          </li>
          @endforeach
          </div>
          <figcaption>Berisikan Profile Anggota dan staff dari Golden Star Malang</figcaption>
        </figure>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@stop