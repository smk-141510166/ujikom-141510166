@extends('layouts.bt')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Pegawai</div>

<center><form action="pegawai/?nama_jabatan=nama_jabatan">
        <div class="form-group input-group" align="center">
            <input type="text" class="form-control" name="nama_jabatan" placeholder="cari berdasarkan nama jabatan"><button class="btn btn-info" type="submit"><i class="fa fa-search">Cari</i></button>
        </div>
</form></center>

        <div class="panel-body">
        <a class="btn btn-success" href="{{url('pegawai/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>Id</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Golongan</th>
                        <th>Photo</th>
                        <th colspan="3">Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($pegawai as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->nip}} </td>
                        <td> {{$data->User->name}} </td>
                        <td> {{$data->User->email}} </td>
                        <td> {{$data->jabatan->nama_jabatan}} </td>
                        <td> {{$data->golongan->nama_golongan}} </td>
                        <td>  <img src = "{{asset('image/'.$data->foto )}}" height="35" width="35"></td>
                        <td><a href="{{route('pegawai.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                        
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection