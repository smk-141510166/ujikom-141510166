@extends('layouts.bt')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Golongan</div>

<center><form action="golongan/?nama_golongan=nama_golongan">
        <div class="form-group input-group" align="center">
            <input type="text" class="form-control" name="nama_golongan" placeholder="cari berdasarkan nama golongan"><button class="btn btn-info" type="submit"><i class="fa fa-search">Cari</i></button>
        </div>
</form></center>

        <div class="panel-body">
        <a class="btn btn-success" href="{{url('golongan/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>Kode Golongan</th>
                        <th>Nama Golongan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($golongan as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_golongan}} </td>
                        <td> {{$data->nama_golongan}}</td>
                        <td> Rp.{{$data->besaran_uang}}</td>
                        <td><form method="POST" action="{{ route('golongan.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('golongan.edit', $data->id)}}" class="btn btn-primary">Edit</a>
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