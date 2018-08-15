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


<!-- Thumbnail Taroh diatas  -->

<div class="form-group">
  <label class="col-sm-12">Nama Admin</label>
  <div class="col-sm-12">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
</div>



<div class="form-group">
  <label class="col-sm-12">Username</label>
  <div class="col-sm-12">
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <label class="col-sm-12">Password Baru</label>
  <div class="col-sm-12">
    {!! Form::password('passnew', ['class' => 'form-control', 'placeholder' => 'Masukkan password baru jika ingin mengganti password...']) !!}
  </div>
</div>

<div class="form-group">
  <label class="col-sm-12">Password Lama</label>
  <div class="col-sm-12">
    {!! Form::password('Password_Lama', ['class' => 'form-control', 'placeholder' => 'Masukkan password lama untuk mengganti username, foto profil, ataupun password']) !!}
  </div>
</div>

<center>
  <div class="form-group">
    <div class="col-sm-12">
      <div class="panel panel-default" style="width: 400px;">
        <div class="panel-heading text-center">
          <b>Foto Aparat Desa</b>
        </div>
        <div class="panel-body text-center">
          <img id="preview" src="{{asset('images-profile-picture/'.$user->profile_photo)}}" alt="preview" width="300px" height="400px">
          <div class="col-sm-12" style="margin-top: 10px; display: none;">
            {!! Form::file('photo', ['id' => 'image']) !!}
          </div>
          <a href="javascript:changeProfile()" class="btn btn-success pull-right" style="margin-top: 10px;"> <i class="fa fa-upload"></i> Pilih Gambar </a>
        </div>
      </div>
    </div>
  </div>
</center>
