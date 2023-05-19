<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    {{-- mycss --}}
    <link rel="stylesheet" href="css/inclinic.css">

    <title>SOWAN</title>
  </head>
  <body id="#home">

    {{-- navbar --}}
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Logo</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Solusi Wangsa Niaga</h5>
              <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#home"><i class="bi bi-grid-fill pe-2 pb-2"></i>Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"><i class="bi bi-clipboard2-fill pe-2 pb-2"></i>Tentang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services"><i class="bi bi-hdd-rack-fill pe-2 pb-2"></i>Layanan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio"><i class="bi bi-grid-1x2-fill pe-2 pb-2"></i>Mitra</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact"><i class="bi bi-telephone-outbound-fill pe-2 pb-2"></i>Kontak</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/catalog"><i class="bi bi-columns-gap pe-2 pb-2"></i>Katalog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/"><i class="bi bi-inboxes-fill pe-2 pb-2"></i>SOWAN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/login"><i class="bi bi-door-open-fill pe-2 pb-2"></i>Login</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </nav>

    {{-- float Button WA --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/6281221987868" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

    {{-- here s the child --}}
    <div class="child">
        @yield('contents')
    </div>

    {{-- footer --}}

    <footer class="text-center text-lg-start" style="background-color: #378b29;">

        {{-- slider --}}
        <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/alkes1.jpg" class="d-block w-100" alt="sowan.jpg">
              </div>
              <div class="carousel-item">
                <img src="assets/img/alkes2.jpg" class="d-block w-100" alt="sowan.jpg">
              </div>
              <div class="carousel-item">
                <img src="assets/img/alkes3.jpg" class="d-block w-100" alt="sowan.jpg">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
        {{-- akhir slider --}}

        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright
          <a class="text-white" href="https://sowan.my.id/">sowan.my.id</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    var nav = document.querySelector('nav');
      window.addEventListener('scroll', function(){
        if(window.pageYOffset > 100) {
          nav.classList.add('nav-color');
        } else {
          nav.classList.remove('nav-color');
        }
    });

    const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll,{
        scrollOffset:50
    });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>