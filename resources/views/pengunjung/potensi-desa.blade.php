@extends('master')

@section('buttonnyusahin')
  <li><a style="color:#50d8af;" href="#contact"><i class="fa fa-phone"></i> Hubungi Kami</a></li>
@endsection

@section('slider')
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
@endsection

@section('content')
<section id="profil">
  <div class="container">
    <div class="section-header">
      <h2>POTENSI DESA MENDIK</h2>
    </div>
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          @foreach($potentials as $Potential)
          <div class="col-lg-3 text-lg-left">
            <img src="{{asset('images-potensi/'.$Potential->thumbnail)}}" width="250px" height="140">
          </div>
          <div class="col-lg-6 text-center text-lg-left">
            <h3 class="cta-title">{{$Potential->title}}</h3>
            <p class="cta-text">{{str_limit($Potential->description,200)}}</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{url('potensi-desa/'.$Potential->id)}}">Lihat Selengkapnya . . .</a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <span style="font-size: 30px;" class="pull-right">{{$potentials->links()}}</span><!-- #call-to-action -->
    <!-- <div class="row">
        <div class="col-lg-12">
          <div class="box wow fadeInLeft">
            <div class="icon"><i class="fa fa-share"></i></div>
            <p class="description" style="min-height: 120px; max-height: 120px;">
              <div class="row">
                          <h3 class="cta-title">Call To Action</h3>
              test</p>
              <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Lihat Selengkapnya . . .</a>
          </div>
          </div>
        </div> -->
    </div>

  </div>
</section><!-- #services -->
<section id="contact" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Hubungi Kami</h2>
      <p>Untuk Informasi Lebih Lanjut Silahkan Menghubungi Pada Kontak Dibawah Ini :</p>
    </div>

    <div class="row contact-info">
      <?php $x = 1; ?>
      @foreach($contacts as $Contact)
      <?php if($x == 1){ ?>

        <div class="col-md-6">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>{{$Contact->jenis_kontak}}</h3>
            <address>{{$Contact->kontak}}</address>
          </div>
        </div>

      <?php }else{ ?>

        <div class="col-md-6">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>{{$Contact->jenis_kontak}}</h3>
            <p>{{$Contact->kontak}}</p>
          </div>
        </div>


      <?php } $x++;?>
      @endforeach
    </div>
  </div>

  <!-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div> -->
</section>
@endsection
