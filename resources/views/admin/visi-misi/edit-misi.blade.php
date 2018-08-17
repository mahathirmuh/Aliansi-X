@extends('admin.master')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-11" style="margin-left: 1px; width: 94%">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Edit Misi Desa
        </div>
        <div class="panel-body">
          {!! Form::model($mission,['url'=>'admin/misi-update/'.$mission->id,'class'=>'form-horizontal']) !!}
          @include('admin.visi-misi.form')
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
