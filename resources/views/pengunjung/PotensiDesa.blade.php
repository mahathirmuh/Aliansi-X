@extends('master')
@section('content')
<section id="profil">
  <div class="container">
    <div class="section-header">
      <h2>POTENSI DESA</h2>
    </div>
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 text-lg-left">
            <img src="{{asset('img/inicover/1.jpg')}}" width="250px" height="140">
          </div>
          <div class="col-lg-6 text-center text-lg-left">
            <h3 class="cta-title">Judul Berita</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{url('/artikel/BacaArtikel')}}">Lihat Selengkapnya . . .</a>
          </div>

          <div class="col-lg-3 text-lg-left">
            <img src="{{asset('img/inicover/2.jpg')}}" width="250px" height="140">
          </div>
          <div class="col-lg-6 text-center text-lg-left">
            <h3 class="cta-title">Judul Berita</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{url('/artikel/BacaArtikel')}}">Lihat Selengkapnya . . .</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
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
@endsection
