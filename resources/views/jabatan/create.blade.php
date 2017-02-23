@extends('layouts.app')

@section('content')
	
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">Tambah Data Jabatan</div>
		<div class="panel-body">
			<form method="POST" action="{{url('jabatan')}}">
			 	{{csrf_field()}}
				<div class="form-group">
					<label>Kode Jabatan</label>
					<input class="form-control" type="text" name="kode_jabatan" placeholder="Masukkan Kode Jabatan">
					 @if ($errors->has('kode_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_jabatan') }}</strong>
                            </span>
                     @endif
				</div>

				<div class="form-group">
					<label>Nama Jabatan</label>
					<input class="form-control" type="text" name="nama_jabatan" placeholder="Masukkan Nama Jabatan">
					@if ($errors->has('nama_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jabatan') }}</strong>
                            </span>
                     @endif
				</div>

				<div class="form-group">
					<label>Besaran Uang</label>
					<input class="form-control" type="text" name="besaran_uang" placeholder="Masukkan Besaran Uang">
					@if ($errors->has('besaran_uang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('besaran_uang') }}</strong>
                            </span>
                     @endif
				</div>

				<div class="form-group">
					<input class="btn btn-success" type="submit" name="submit" value="Tambah">
				</div>
			</form>
		</div>
	</div>
</div>

@stop