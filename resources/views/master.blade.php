<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Beranda Desa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="icon" href="{{asset('img/favicon-16x16.png')}}">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:Mahathirmuhammad02@gmail.com">MahathirMuhammad02@gmail.com</a>
        <i class="fa fa-phone"></i> +62 853 4865 2074
      </div>
      <div class="social-links float-right">
        <a href="https://www.twitter.com/mauliahar" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://wwww.facebook.com/100008526373400" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://wwww.instagram.com/mahathirmuh" class="instagram"><i class="fa fa-instagram"></i></a>
        <!-- <a href="" class="google-plus"><i class="fa fa-google-plus"></i></a> -->
        <!-- <a href="" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><img src="{{asset('img/daya-taka-colour_burned.png')}}" alt="" width="9%"> Desa<span>Mendik</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <!-- <li class="menu-has-childre"><a href="#">Beranda</a>
            <ul>
              <li><a href="#">Profil & Sejarah</a></li>
              <li><a href="#">Visi & Misi</a></li>
            </ul> -->
          <!-- </li> -->
          <!-- <li <a href="{{url('/')}}">Beranda</a></li> -->
          <li><a href="{{url('/')}}">Beranda</a></li>
          <li><a href="{{url('/artikel')}}">Kegiatan Desa</a></li>
          <li><a href="{{url('/struktur-organisasi')}}">Struktur Organisasi</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">Peta Desa</a></li> -->
          <li><a style="color:#50d8af; "href="#contact"><i class="fa fa-phone"></i> Hubungi Kami</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content wow zoomIn">
      <h2>SELAMAT <span style="text-decoration: none;">DATANG</span><br>DI WEBSITE <span style="text-decoration: none;"> DESA MENDIK</span></h2>
      <div>
        @yield('button')
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      @foreach($slider as $Slider)
      <div class="item"> <img src="{{url('img/inicover/'.$Slider->slider_photo)}}" alt="{{$Slider->picture_title}}"> </div>
      @endforeach
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Peta Section
    ============================-->

    @yield('content')

    <!--==========================
      Services Section
    ============================-->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong> All Right Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/demo/Reveal/">Reveal</a> <br>
        Front End / Back End By : <a href="https://wwww.facebook.com/100008526373400"> Maulia.</a> / <a href="https://web.facebook.com/widyatamathebluedemon"> Tamagotchii</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/magnific-popup/magnific-popup.min.js')}}"></script>
  <script src="{{asset('lib/sticky/sticky.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <!-- <script src="('contactform/contactform.js')}}"></script> -->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
