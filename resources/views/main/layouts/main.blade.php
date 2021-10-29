<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap5/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/img/epw-logo/logo-bg-blue.png" type="image/x-icon">

    <link rel="canonical" href="https://epwits.com/">
    <meta name="canonical" href="https://epwits.com/" />
    <meta name="description" content="EPW sebagai media pengenalan Teknik Fisika secara umum, keilmuan, keprofesian, dan perkuliahan (prestasi, lingkungan, dan sekitarnya) terhadap masyarakat umum, siswa calon mahasiswa baru, dan siswa SMA secara umum. EPW memberikan motivasi terhadap siswa sma untuk berkuliah dan menjadikan Teknik Fisika sebagai pilihan. EPW memberikan dampak tidak hanya pada peningkatan peminat Teknik Fisika, tetapi juga memberikan dampak bagi lingkungan sekitar." />
    <meta name="author" content="EPW ITS 2022" />
    <meta name="keywords" content="EPW,epw,EPW ITS, epw its, EPW ITS 2022, epw its 2022, teknik fisika, teknik fisika its, Surabaya, Jawa Timur" />
    <meta name="robots" content="index,follow" />
    <meta name="theme-color" content="#424A63" />

    <title>EPW 2022 | {{ $title }}</title>
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg py-0">
      <div class="container">
        <div class="navbar-brand flex-lg-grow-1">
          <a href="/">
            <img src="/img/epw-logo/logo-white.png" alt="EPW Logo" width="60">
          </a>
        </div>
        <div class="navbar-rainbow">
          <div class="rainbow"></div>
          <div class="rainbow"></div>
          <div class="rainbow"></div>
          <div class="rainbow"></div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fas fa-bars fa-lg fa-fw"></span>
        </button>
        <div class="collapse navbar-collapse flex-lg-grow-0" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item text-center">
              <a class="nav-link my-3" href="/">Home</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link my-3" href="/about">About</a>
            </li>
            <li class="nav-item text-center dropdown">
              <a class="nav-link dropdown-toggle my-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Event
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-center" href="/epc">EPC</a></li>
                <li><a class="dropdown-item text-center" href="/snow">SNOW</a></li>
                <li><a class="dropdown-item text-center" href="/coming-soon">Grand Roadshow</a></li>
                <li><a class="dropdown-item text-center" href="/coming-soon">Big Event</a></li>
              </ul>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link my-3" href="/coming-soon">Merchandise</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link my-3" href="/coming-soon">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- End of Navbar --}}

    @yield('content')

    {{-- Footer --}}
    <footer class="footer footer-blue">
      <img src="/svg/footer-wire.svg" class="footer-wire" alt="">
      <div class="container pt-4 pb-2">
        <div class="row align-items-center">
          <div class="col-lg-4 text-center">
            <img src="/img/epw-logo/logo-white.png" alt="EPW Logo" class="footer-logo">
          </div>
          <div class="col-lg-8">
            <div class="footer-desc">
              <h2 class="footer-title">Reach us!</h2>
              <a href="https://goo.gl/maps/SBkiPs6v96jUeDHn9" target="_blank" class="footer-content">
                <img src="/svg/icons/location.svg" alt="" class="footer-icon">
                <p>
                  Department of Engineering Physics<br>
                  <span>Kampus ITS, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur - 60111</span>
                </p>
              </a>
              <div class="row">
                <div class="col-md-4 col-6">
                  <a href="https://www.instagram.com/epw.its/" target="_blank" class="footer-content">
                    <img src="/svg/icons/instagram.svg" alt="" class="footer-icon">
                    <span>@epw.its</span>
                  </a>
                </div>
                <div class="col-md-4 col-6">
                  <a href="http://line.me/ti/p/~@ket9005b" target="_blank" class="footer-content">
                    <img src="/svg/icons/line.svg" alt="" class="footer-icon">
                    <span>@ket9005b</span>
                  </a>
                </div>
                <div class="col-md-4 col-6">
                  <a href="https://www.linkedin.com/in/epw-its/" target="_blank" class="footer-content">
                    <img src="/svg/icons/linkedin.svg" alt="" class="footer-icon">
                    <span>EPW ITS</span>
                  </a>
                </div>
                <div class="col-md-4 col-6">
                  <a href="https://twitter.com/epw_its" target="_blank" class="footer-content">
                    <img src="/svg/icons/twitter.svg" alt="" class="footer-icon">
                    <span>@epw_its</span>
                  </a>
                </div>
                <div class="col-md-4 col-6">
                  <a href="https://www.tiktok.com/@epw.its" target="_blank" class="footer-content">
                    <img src="/svg/icons/tiktok.svg" alt="" class="footer-icon">
                    <span>@epw.its</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center mt-5 copyright">Copyright &copy; 2021 by EPW ITS 2022, all rights reserved!</p>
      </div>
    </footer>
    {{-- End of Footer --}}
    
    {{-- Javascript --}}
    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap5/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      $('.scrollToTop').on('click', function() {
        $(window).scrollTop(0);
      });
    </script>
  </body>
</html>