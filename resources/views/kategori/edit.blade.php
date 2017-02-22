@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update</div>

                <div class="panel-body">
                    {{ Form::open(array('autocomplete' => 'off', 'method' => 'PATCH', 'route' => array('kategori.update', $kategori->id))) }}
                <div class="form-group">
                    {!! Form::label('kode_lembur', 'Kode Lembur') !!}
                    {!! Form::text('kode_lembur',null,['class'=>'form-control']) !!}
                </div>

                <div class="control-group">
                        <label class="control-label">Jabatan</label>
                        <div class="controls">
                            <select class="form-control" name="id_jabatan">
                                @foreach ($jabatan as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Golongan</label>
                        <div class="controls">
                            <select class="form-control" name="id_jabatan">
                                @foreach ($golongan as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_golongan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                <div class="form-group">
                    {!! Form::label('besaran_uang', 'Besaran uang') !!}
                    {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('SAVE', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection