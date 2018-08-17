@extends('admin.master')
@section('content')

<div class="row">
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3  style="font-size: 30px;">Profil & <br>Sejarah Desa Mendik</h3>
        <p style="font-size: 15px; margin-right: 100px;">Ini adalah pilihan untuk mengatur profil desa x</p>
      </div>
      <div class="icon">
        <i class="ion ion-leaf"></i>
      </div>
      @foreach($profile as $Profile)
      <a href="{{url('admin/profil-desa-edit/'.$Profile->id)}}" class="small-box-footer">Atur Profil <i class="fa fa-arrow-circle-right"></i></a>
      @endforeach
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3 style="font-size: 30px; margin-bottom: 23px;">Slide Show</h3>
        <br>
        <p style="font-size: 15px; margin-right: 100px;">Ini adalah pilihan untuk mengatur slideshow website desa Mendik</p>
      </div>
      <div class="icon">
        <i class="ion ion-images"></i>
      </div>
      <a href="{{url('admin/slider')}}" class="small-box-footer">Atur Slideshow <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3 style="font-size: 30px;">Visi & Misi <br>Desa Mendik </h3>

        <p>Ini adalah pilihan untuk mengatur Visi dan Misi website desa Mendik</p>
      </div>
      <div class="icon">
        <i class="ion ion-clipboard"></i>
      @foreach($vision as $Vision)
      </div>
        <a href="{{url('admin/visi-misi/'.$Vision->id)}}" class="small-box-footer">Atur Visi dan Misi <i class="fa fa-arrow-circle-right"></i></a>
      </div>
      @endforeach
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
  <!-- ./col -->
</div>

@endsection
