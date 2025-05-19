<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="" class="logo d-flex align-items-center me-auto">

         <img src="{{ asset ('user/img/logo.png')}}" alt="">
        <h1 class="sitename">Company</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{url ('welcome')}}" class="active">Beranda</a></li>  
          <li><a href="{{url ('informasi')}}">Informasi</a></li>    
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>          
          <li><a href="contact.html">Contact</a></li>
          <li class="dropdown"><a href="{{url ('about')}}"><span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{url ('team')}}">Karyawan</a></li>
              <li><a href="testimonials.html">Eskul</a></li>              
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>