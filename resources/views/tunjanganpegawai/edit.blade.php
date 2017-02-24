@section('content')
<div class="col-md-9">
        <div class="panel panel-info">
        <div class="panel-heading"><h1><center><strong>Edit Data Tunjangan Pegawai</h1></strong></div>
        <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('tunjanganpegawai.update',$tunjanganpegawai->id) }}">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            
                            <div class="form-group">
                            <label for="id_pegawai" class="col-md-4 control-label">Nama Pegawai</label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_pegawai" required>
                            
                            @foreach($pegawai as $data)
                            <option value="{!! $data->id !!}">{!! $data->User->name !!}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="kode_tunjangan" class="col-md-4 control-label">Uang Tunjangan</label>
                            <div class="col-md-6">
                            <select class="form-control" name="kode_tunjangan" required>
                           
                            @foreach($tunjangan as $data)
                            <option value="{!! $data->id !!}">{!! $data->besaran_uang !!}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection