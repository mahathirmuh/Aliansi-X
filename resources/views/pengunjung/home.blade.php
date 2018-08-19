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
        <img src="{{asset('map/'.$map->map)}}" alt="{{$map->map_title}}" width="550px" height="550px">
      </div>

      <div class="col-lg-6 content">
        <h2>Peta Desa Mendik</h2>
        <h3>Desa Mendik memiliki batas wilayah sebagai berikut : </h3>

        <ul>
          @foreach($borderlines as $Borderline)
          <li><i class="ion-android-checkmark-circle"></i>{{$Borderline->jenis_batas}} : {{$Borderline->nama_batas}}</li>
          @endforeach
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
      <p>Ini adalah galeri kegiatan-kegiatan terbaru desa Mendik</p>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row no-gutters">
      @foreach($activities as $Activity)
      <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
          <a href="{{asset('images-kegiatan-desa/'.$Activity->mini_thumbnail)}}" class="portfolio-popup">
            <img src="{{asset('images-kegiatan-desa/'.$Activity->mini_thumbnail)}}" alt="">
          </a>
        </div>
      </div>
      @endforeach
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
