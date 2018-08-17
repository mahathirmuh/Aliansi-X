@extends('admin.master')

@section('content')

<div class="box" style="border-top: 3px solid #3c8dbc">
  <div class="box-header" style="color: white; background: #3c8dbc">
    <h3 class="box-title">Atur Visi dan Misi Desa</h3>
  </div>
<!-- /.box-header -->
  <div class="box-body">
    {!! Form::model($vision,['url'=>'admin/visi-update/'.$vision->id,'class'=>'form-horizontal']) !!}

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
      <label class="col-sm-12">Visi Desa Mendik</label>
      <div class="col-sm-12">
        {!! Form::textarea('visi', null, ['class' => 'form-control', 'rows' => '10']) !!}
      </div>
    </div>

    <div style="width: 100%; text-align: center;">
      <button type="submit" class="btn btn-primary pull-right" style="margin-left: 2px; margin-top: 10px;"> <i class="fa fa-check"></i> Simpan Perubahan Visi</button>
    </div>
    {!! Form::close() !!}

    <label class="col-xs-12"  style="margin-top: 30px; margin-bottom: 10px;">Misi Desa Mendik</label>
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th class="text-center col-xs-1">No.</th>
        <th class="text-center col-xs-9">Misi</th>
        <th class="text-center col-xs-2">Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php $x = 1; ?>
        @foreach($missions as $Mission)
          <tr>
            <td class="text-center col-xs-1" style="vertical-align: middle"><?php echo $x; $x++; ?></td>
            <td>{{$Mission->misi}}</td>
            <td class="text-center" style="vertical-align: middle;">
              <a href="{{url('admin/misi-edit/'.$Mission->id)}}" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit Misi"> <i class="fa fa-pencil"></i> </a>
              <a href="{{url('admin/misi-hapus/'.$Mission->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus Misi"> <i class="fa fa-trash"></i> </a>
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3" class="text-right"> <a href="{{url('admin/misi-tambah')}}" class="btn btn-md btn-primary pull-right"> <i class="fa fa-plus"></i> Tambah Misi </a></td>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

@endsection
