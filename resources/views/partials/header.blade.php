<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="/img/logo.webp" alt="logo tradeindo">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
          <li><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang Kami</a></li>
          <li><a class="nav-link {{ Request::is('kegiatan') ? 'active' : '' }}" href="/kegiatan">Kegiatan</a></li>
          <li><a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Artikel</a></li>
          <li class="dropdown"><a class="nav-link {{ Request::is('fasilitas') ? 'active' : '' }}" href="/fasilitas"><span>Fasilitas</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/edukasi">Kelas Edukasi</a></li>
              <li class="dropdown"><a href="#"><span>Program Rekomendasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="/expert-advisor">Expert Advisor</a></li>
                  <li><a href="/copytrade">Copytrade</a></li>
                  <li><a href="/pamm">Akun PAMM</a></li>
                </ul>
              </li>
              <li><a href="/broker">Broker Pilihan</a></li>
            </ul>
          </li>
          <li><a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header>