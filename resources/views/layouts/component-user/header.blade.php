<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a  class="logo d-flex align-items-center me-auto">
         <img src="{{ asset ('user/img/logo-tk.png')}}" style="width: 100px;">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{url ('/')}}" class="active">Beranda</a></li>  
          <li><a href="{{url ('informasi')}}">Informasi</a></li>    
          <li><a href="{{url ('fasilitas')}}">Fasilitas</a></li>
          <li class="dropdown"><a href="{{url ('about')}}"><span>Lainnya</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{url ('team')}}">Karyawan</a></li>
              <li><a href="{{url ('eskul')}}">Eskul</a></li> 
              <li><a href="{{url ('prestasi')}}">Prestasi</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>