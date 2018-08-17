@extends('admin.master')

@section('content')

<div class="box" style="border-top: 3px solid #3c8dbc">
  <div class="box-header" style="color: white; background: #3c8dbc">
    <h3 class="box-title">Tabel Artikel Kegiatan Desa Mendik</h3>
  </div>
<!-- /.box-header -->
  <div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th class="text-center col-xs-1">No.</th>
        <th class="text-center col-xs-2">Nama Foto</th>
        <th class="text-center col-xs-4">Foto</th>
        <th class="text-center col-xs-1">Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php
          $x = 1;
        ?>
        @foreach($sliders as $Slider)
        <tr>
          <td class="text-center" style="vertical-align: middle">
            <?php
              echo $x;
              $x++;
            ?>
          </td>
          <td class="text-center" style="vertical-align: middle;">{{$Slider->picture_title}}</td>
          <td class="text-center"> <img src="{{url('img/inicover/'.$Slider->slider_photo)}}" alt="{{$Slider->picture_title}}" style="width: 300px; height: auto;"> </td>
          <td style="vertical-align: middle; text-align: center;"><a href="{{url('admin/slider-edit/'.$Slider->id)}}" class="btn btn-md btn-warning" data-toggle="tooltip" Title="Edit Gambar Slider"> <i class="fa fa-pencil"></i> </a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>


@endsection
