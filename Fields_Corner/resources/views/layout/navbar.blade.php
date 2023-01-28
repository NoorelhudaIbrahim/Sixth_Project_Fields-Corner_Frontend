
{{-- @section('header') --}}
<header role="banner" class="probootstrap-header lb">
    <!-- <div class="container"> -->
    <div class="row">
        <a href="index.html" class="probootstrap-logo visible-xs"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>

        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">

          <ul class="probootstrap-main-nav">

            <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
            <li ><a href="{{ url('about') }}">About</a></li>
            {{-- <li><a href="rooms.html">Our Rooms</a></li> --}}
            <li class="hidden-xs probootstrap-logo-center"><a href="index.html"><img src="img/logo.png" class="hires" width="250" height="100" alt="Free Bootstrap Template by uicookies.com"></a></li>
            <li><a href="{{ route('reservation') }}">Reservation</a></li>
            {{-- <li><a href="blog.html">Blog</a></li> --}}
            <li><a href="{{ url('contact') }}">Contact</a></li>
          </ul>



          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect With Us</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
        </div>
    <!-- </div> -->
  </header>
{{-- @endsection --}}

<!-- header section starts  -->

 <header>

  <div id="menu-bar" class="fas fa-bars"></div>

  <a href="#" class="logo"><span>T</span>ravel</a>

  <nav class="navbar">
      <a href="#home">home</a>
      <a href="#book">book</a>
      <a href="#packages">packages</a>
      <a href="#services">services</a>
      <a href="#gallery">gallery</a>
      <a href="#review">review</a>
      <a href="#contact">contact</a>
  </nav>

  <div class="icons">
      <i class="fas fa-search" id="search-btn"></i>
      <i class="fas fa-user" id="login-btn"></i>
  </div>

  <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fas fa-search"></label>
  </form>

</header>

<!-- header section ends -->

