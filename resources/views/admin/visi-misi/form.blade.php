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
  <label class="col-sm-12">Misi Desa Mendik</label>
  <div class="col-sm-12">
    {!! Form::textarea('misi', null, ['class' => 'form-control', 'rows' => '10']) !!}
  </div>
</div>
