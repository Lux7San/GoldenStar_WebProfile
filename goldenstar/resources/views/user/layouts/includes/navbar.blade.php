  <div id="topbar" class="hoc clear">

    <div class="fl_right"> 
      
      <ul class="nospace">
        <li><a href="/home"><i class="fas fa-home"></i></a></li>
        <li><a href="https://wa.me/6288235071898?text=Hallo%20kak%20saya%20butuh%20bantuan%20nih!" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
        <li><a href="/login" title="Login to Admin"><i class="fas fa-sign-in-alt"></i></a></li>
      </ul>
      
    </div>
  </div>
</div>



<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      
      <h1><a href="index.html"><i class="far fa-star">Golden Star</i></a></h1>
      
    </div>
    <nav id="mainav" class="fl_right"> 
      
      <ul class="nav">
        <li class="{{request()->is('home') ? 'active' : ''}}"><a href="/home">Home</a></li>
        <li class="{{request()->is('event') ? 'active' : ''}}"><a href="/event">Event</a></li>
        <li class="{{request()->is('profile') ? 'active' : ''}}"><a href="/profile">Profile Anggota</a></li>
        <li class="{{request()->is('gallery') ? 'active' : ''}}"><a href="/gallery">Gallery</a></li>
        <li class="{{request()->is('yt-link') ? 'active' : ''}}"><a href="/yt-link">Youtube List</a></li>
      </ul>
      
    </nav>
  </header>
</div>



<div class="wrapper bgded overlay gradient" style="background-image: url('slide.jpg');">
  <div id="pageintro" class="hoc clear"> 
    
    <article>
      <p>Selamat Datang Di Web Kami</p>
      <h3 class="heading"><i class="fa fa-star" aria-hidden="true"> Golden Star Malang</i></h3>
      <p>Web Profile yang kami kembangkan bersama</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="https://wa.me/6288235071898?text=Hallo%20kak%20saya%20mau%20tanya-tanya%20nih!"><i class="fab fa-whatsapp" aria-hidden="true"> Contact Us</i></a></li>
          <li><a class="btn inverse" href="https://saweria.co/lux7">Our Support</a></li>
        </ul>
      </footer>
    </article>
    
  </div>
</div>