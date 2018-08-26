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

  <div class="col-md-12" style="width: 100%">
    <div class="panel panel-primary">
      <div class="panel-heading">
        Edit Telepon Desa Mendik
      </div>
      <div class="panel-body">
        {!! Form::model($address, ['url' => 'admin/kontak-update/'.$address->id, 'class' => 'form-horizontal']) !!}

          <div class="form-group">
            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>

          <div class="form-group">
            <div class="col-xs-11">
              {!! Form::text('kontak', null, ['class' => 'form-control', ]) !!}
            </div>
            <div class="col-xs-1">
                <button type="submit" class="btn btn-md btn-primary pull-right" title="Edit data alamat desa Mendik" data-toggle="tooltip"> <i class="fa fa-check"></i> Simpan</button>
            </div>

          </div>

        {!! Form::close() !!}
      </div>
    </div>
  </div>

  <!-- ./col -->
  <div class="col-md-12" style="width: 100%">
    <div class="panel panel-primary">
      <div class="panel-heading">
        Edit Telepon Desa Mendik
      </div>
      <div class="panel-body">
        {!! Form::model($phone, ['url' => 'admin/kontak-update/'.$phone->id, 'class' => 'form-horizontal']) !!}

        <div class="form-group">
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>

        <div class="form-group">
          <div class="col-xs-11">
            {!! Form::text('kontak', null, ['class' => 'form-control', ]) !!}
          </div>
          <div class="col-xs-1">
            <button type="submit" class="btn btn-md btn-primary pull-right" title="Edit data telepon desa Mendik" data-toggle="tooltip"> <i class="fa fa-check"></i> Simpan</button>
          </div>

        </div>

        {!! Form::close() !!}
      </div>
    </div>
  </div>
  <div class="col-md-12" style="width: 100%">
    <div class="panel panel-primary">
      <div class="panel-heading">
        Edit Peta Mendik
      </div>
      <div class="panel-body">
        {!! Form::model($map,['url'=>'admin/peta-update/'.$map->id,'class'=>'form-horizontal', 'files' => true]) !!}

        <div class="form-group">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading text-center">
                <b>Gambar Peta Mendik</b>
              </div>
              <div class="panel-body text-center">
                <img id="preview" src="{{asset('map/'.$map->map)}}" alt="preview" width="500px" height="500px">
                <div class="col-sm-12" style="margin-top: 10px; display: none;">
                  {!! Form::file('map', ['id' => 'image']) !!}
                </div>
                <br>
                <a href="javascript:changeProfile()" class="btn btn-success pull-right" style="margin-top: 10px;"> <i class="fa fa-upload"></i> Pilih Gambar </a>
              </div>
            </div>
          </div>
        </div>

        <div style="width: 100%; text-align: center;">
          <button type="submit" id="upload" class="btn btn-primary pull-right" style="margin-left: 2px; margin-top: 10px;"> <i class="fa fa-check"></i> Simpan </button>
          <a class="btn btn-warning pull-right" onClick="history.go(-1)" style="margin-top: 10px;"> <i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

  <div class="col-xs-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        Tabel Data Batas Wilayah
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-center">No.</td>
              <td class="text-center">Jenis Batas</td>
              <td class="text-center">Nama Batas</td>
              <td class="text-center">Aksi</td>
            </tr>
          </thead>
          <tbody>
            <?php
              $x = 1;
            ?>
            @foreach($borderlines as $Borderline)
            <tr>
              <td class="text-center"> <?php echo $x; $x++; ?> </td>
              <td> {{$Borderline->jenis_batas}} </td>
              <td> {{$Borderline->nama_batas}} </td>
              <td class="text-center">
                <a href="{{url('admin/batas-wilayah-edit/'.$Borderline->id)}}" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit {{$Borderline->jenis_batas}}"> <i class="fa fa-pencil"></i> </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>

      function changeProfile() {
          $('#image').click();
      }
      $('#image').change(function () {
          var imgPath = this.value;
          var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          if (ext == "png" || ext == "jpg" || ext == "jpeg")
              readURL(this);
          else
              alert("Please select image file (jpg, jpeg, png).")
      });
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.readAsDataURL(input.files[0]);
              reader.onload = function (e) {
                  $('#preview').attr('src', e.target.result);
                  console.log(input.files[0]);
              };
  //                $("#remove").val(0);
          }
      }
      function removeImage() {
          $('#preview').attr('src', 'noimage.jpg');
  //            $("#remove").val(1);
      }

      $('#upload').change(function(){
        if($(this).val() != ''){
          upload(this);
        }else{
          continue;
        }
      });

      function upload(img) {
        var form_data = new FormData();
        form_data.append('thumbnail', img.files[0])
      }

  </script>


@endsection
