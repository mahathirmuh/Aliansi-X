@extends('admin.master')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-11" style="margin-left: 1px; width: 94%">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Edit Batas Wilayah Desa
        </div>
        <div class="panel-body">
          @if ($message = Session::get('error'))
	         <div class="alert alert-danger alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>
		            <strong>{{ $message }}</strong>
	          </div>
	        @endif
          {!! Form::model($borderline,['url'=>'admin/batas-wilayah-update/'.$borderline->id,'class'=>'form-horizontal']) !!}

          <div class="form-group">
            <label class="col-sm-12">{{$borderline->jenis_batas}}</label>
            <div class="col-sm-12">
              {!! Form::text('nama_batas', null, ['class' => 'form-control']) !!}
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
  </div>
</div>

@endsection
