@extends('layouts.bt')

@section('content')
    <h1>Edit</h1>
    {!! Form::model($pegawai,['method' => 'PATCH','route'=>['pegawai.update',$pegawai->id],'files'=>true]) !!}
    
    <div class="form-group">
        {!! Form::label('nip', 'nip') !!}
        {!! Form::text('nip',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                          
                          <div class="control-group">
                        <label class="control-label">Id Jabatan</label>
                        <div class="controls">
                            <select class="form-control" name="id_jabatan">
                                @foreach ($jabatan as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
    <div class="control-group">
                        <label class="control-label">Id Golongan</label>
                        <div class="controls">
                            <select class="form-control" name="id_golongan">
                                @foreach ($golongan as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_golongan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
     <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label for="foto" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto" value="{{ old('foto') }}" required autofocus>

                                @if ($errors->has('foto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br><br>
                        </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop