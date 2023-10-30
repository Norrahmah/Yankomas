<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

<div class="logo">
  <div class="row align-items-center">
    <a href="index.html" style="display: flex; align-items: center; text-decoration: none;">
      <img src="{{ asset('assets/img/kemenkumham.png') }}" alt="" class="img-fluid" style="margin-right: 20px; width: 40px;">
      <h1 class="text-light" style="font-size: 20px; margin-top: 0;"><span>Pemajuan HAM</span></h1>
    </a>
  </div>
</div>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('pengaduan-awal/create')}}">Pengaduan</a></li>
          <li><a href="{{url('status')}}">Status Pengaduan</a></li>
          <li><a href="{{url('kontak')}}">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span> @if(auth()->check())

            {{ auth()->user()->nama }}

            @endif</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('login')}}">Login</a></li>
              <li><a href="{{url('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>