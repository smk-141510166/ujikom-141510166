@extends('layouts.bt')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Tunjangan</div>

<center><form action="tunjangan/?kode_tunjangan=kode_tunjangan">
        <div class="form-group input-group" align="center">
            <input type="text" class="form-control" name="kode_tunjangan" placeholder="cari berdasarkan kode tunjangan"><button class="btn btn-info" type="submit"><i class="fa fa-search">Cari</i></button>
        </div>
</form></center>

        <div class="panel-body">
        <a class="btn btn-success" href="{{url('tunjangan/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>Id</th>
                        <th>Kode Tunjangan</th>
                        <th>Jabatan</th>
                        <th>Golongan</th>
                        <th>Status</th>
                        <th>Jumlah Anak</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($tunjangan as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_tunjangan}} </td>
                        <td> {{$data->jabatan->nama_jabatan}} </td>
                        <td> {{$data->golongan->nama_golongan}} </td>
                        <td> {{$data->status}} </td>
                        <td> {{$data->jumlah_anak}} </td>
                        <td> {{$data->besaran_uang}} </td>
                        <td><form method="POST" action="{{ route('tunjangan.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('tunjangan.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                </form>
                            </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection