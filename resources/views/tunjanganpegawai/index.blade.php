@extends('layouts.bt')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Tunjangan Pegawai</div>

<center><form action="tunjanganpegawai/?kode_tunjangan=kode_tunjangan">
        <div class="form-group input-group" align="center">
            <input type="text" class="form-control" name="kode_tunjangan" placeholder="cari berdasarkan tunjangan">&nbsp;&nbsp;<button class="btn btn-info" type="submit"><i class="fa fa-search">Cari</button>
        </div>
</form></center>


        <div class="panel-body">
        <a class="btn btn-success" href="{{url('tunjanganpegawai/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th><center>Id</th>
                        <th><center>Tunjangan</th>
                        <th><center>Nama Pegawai</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($tunjanganpegawai as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->tunjangan_pegawai->kode_tunjangan}} </td>
                        <td> {{$data->User_id}} </td>
                        <td><a href="{{route('tunjanganpegawai.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                        @include('modals.delet',['url'=>route('pegawai.destroy',$data->id),'modal'=>$data])
                         
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection