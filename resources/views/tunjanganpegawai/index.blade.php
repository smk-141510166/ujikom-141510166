@extends('layouts.bt')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Tunjangan Pegawai</div>

<div class="Form-group"><center>
<Form action="{{url('tunjanganpegawai')}}/?pegawai->nama_pegawai=pegawai->nama_pegawai">
<input type="text" name="pegawai->nama_pegawai" placeholder="cari"></Form></center></div>

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