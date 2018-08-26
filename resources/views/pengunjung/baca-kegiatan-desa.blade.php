@extends('master')

@section('buttonnyusahin')
  <li><a style="color:#50d8af;" href="{{url('artikel')}}"><i class="fa fa-arrow-left"></i> Kembali</a></li>
@endsection

@section('content')
<section id="profil">
  <div class="container">
    <div class="section-header">
      <h2>{{$activity->title}}</h2>
    </div>
    <div class="col-lg-12 text-center">
      <img src="{{asset('images-kegiatan-desa/'.$activity->thumbnail)}}">
    </div>
    <p style="margin-top: 20px; text-align: justify;">{!! nl2br(e($activity->description)) !!}</p>
  </section>
  @endsection
