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
          <article>
          <div>
            <center>
            <h1 class="heading">{{$galery->galery_name}}</h1>
            <img src="{{ url('Galery/'.$galery->image) }}" style="border:3px solid blue">
            <center>
          </div>
          </article>
          </ul>
        </figure>
      </div>
      
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

@stop

