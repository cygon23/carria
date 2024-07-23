<!-- Header Section in layouts.header -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.html"><img src="{{ url('font/assets/img/IMG_2864.PNG') }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar custom-navbar-bg">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="{{url('blog')}}">Blog</a></li>

          {{-- <li class="dropdown"><a href="#"><span>Meet Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="inner-page.html">Carrier Team</a></li>
              <li class="dropdown"><a href="#"><span>Events</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Done Events</a></li>
                  <li><a href="#">Upcoming events</a></li>
                </ul>
              </li>
            </ul>
          </li> --}}
          <li class="dropdown"><a href="{{ url('login') }}"><span>Login</span></a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>



    </div>
  </header>
