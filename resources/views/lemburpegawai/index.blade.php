@extends('layouts.bt')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Lembur Pegawai</div>

<center><form action="lemburpegawai/?kode_lembur=kode_lembur">
        <div class="form-group input-group" align="center">
            <input type="text" class="form-control" name="kode_lembur" placeholder="cari berdasarkan Kode Lembur"><button class="btn btn-info" type="submit"><i class="fa fa-search">Cari</i></button>
        </div>
</form></center>

        <div class="panel-body">
        <a class="btn btn-success" href="{{url('lemburpegawai/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>Id Kode Lembur</th>
                        <th>Nama Pegawai</th>
                        <th>Jumlah Jam</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($lemburpegawai as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}}</td>
                        <td> {{$data->kategori_lembur->kode_lembur}} </td>
                        <td> {{$data->pegawai->User->name}}</td>
                        <td> {{$data->jumlah_jam}}</td>
                        <td><form method="POST" action="{{ route('lemburpegawai.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('lemburpegawai.edit', $data->id)}}" class="btn btn-primary">Edit</a>
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