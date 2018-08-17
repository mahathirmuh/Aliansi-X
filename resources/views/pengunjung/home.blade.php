@extends('master')
@section('button')
<a href="#profil" class="btn-get-started scrollto">Profil & Sejarah</a>
<a href="#peta" class="btn-projects scrollto">Peta Desa</a>
@endsection
@section('content')

<section id="profil">
  <div class="container">
    <div class="section-header">
      <h2>PROFIL & SEJARAH</h2>
      @foreach($profile as $Profile)
      <p>{!! nl2br(e($Profile->profil_desa)) !!}</p>
      @endforeach
      <h2 style="margin-left: 30px; font-size: 25px; margin-top: 20px;"> <i class="fa fa-arrow-right"></i> VISI Desa Mendik</h2>
      @foreach($vision as $Vision)
      <p class="text-center" style="margin-left: 30px; margin-right: 30px; font-weight: bold;">"{{$Vision->visi}}"</p>
      @endforeach
      <h2 style="margin-left: 30px; font-size: 25px; margin-top: 20px;"> <i class="fa fa-arrow-right"></i> Misi Desa Mendik</h2>
    </div>

    <div class="row">
      <?php $x = 1; ?>
      @foreach($missions as $Mission)
      <?php if($x % 2 != 0){ ?>
        <div class="col-lg-6">
          <div class="box wow fadeInLeft">
            <div class="icon"><i class="fa fa-share"></i></div>
            <p class="description" style="min-height: 120px; max-height: 120px;">{{$Mission->misi}}</p>
          </div>
        </div>
      <?php }else{ ?>
        <div class="col-lg-6">
          <div class="box wow fadeInRight">
            <div class="icon"><i class="fa fa-share"></i></div>
            <p class="description" style="min-height: 120px; max-height: 120px;">{{$Mission->misi}}</p>
          </div>
        </div>
      <?php }
        $x++;
      ?>
      @endforeach
    </div>

  </div>
</section><!-- #services -->

<section id="peta" class="wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 about-img">
        <img src="img/about-img.jpg" alt="">
      </div>

      <div class="col-lg-6 content">
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

        <ul>
          <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
          <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
          <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
        </ul>

      </div>
    </div>

  </div>
</section><!-- #Peta -->
<!--==========================
  Our Portfolio Section
============================-->


  <section id="team" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Struktur Organisasi</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <div class="details">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <div class="details">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  </section><!-- #team -->

<section id="portfolio" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Galeri Kegiatan Desa</h2>
      <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row no-gutters">

      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="img/portfolio/1.jpg" class="portfolio-popup">
            <img src="img/portfolio/1.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="img/portfolio/2.jpg" class="portfolio-popup">
            <img src="img/portfolio/2.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="img/portfolio/3.jpg" class="portfolio-popup">
            <img src="img/portfolio/3.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="img/portfolio/4.jpg" class="portfolio-popup">
            <img src="img/portfolio/4.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="img/portfolio/5.jpg" class="portfolio-popup">
            <img src="img/portfolio/5.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="img/portfolio/6.jpg" class="portfolio-popup">
            <img src="img/portfolio/6.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="img/portfolio/7.jpg" class="portfolio-popup">
            <img src="img/portfolio/7.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="img/portfolio/8.jpg" class="portfolio-popup">
            <img src="img/portfolio/8.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
            </div>
          </a>
        </div>
      </div>

    </div>

  </div>
</section><!-- #portfolio -->

<!--==========================
  Contact Section
============================-->
<section id="contact" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Hubungi Kami</h2>
      <p>Untuk Informasi Lebih Lanjut Silahkan Menghubungi Pada Kontak Dibawah Ini :</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Address</h3>
          <address>A108 Adam Street, NY 535022, USA</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Phone Number</h3>
          <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:Mahathirmuhammad02@gmail.com">info@example.com</a></p>
        </div>
      </div>

    </div>
  </div>

  <!-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div> -->
</section>
@endsection
