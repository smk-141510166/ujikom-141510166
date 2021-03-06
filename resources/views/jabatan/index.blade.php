@extends('layouts.bt')

@section('content')

<body>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Jabatan</div>

<center><form action="jabatan/?nama_jabatan=nama_jabatan">
        <div class="form-group input-group" align="center">
            <input type="text" class="form-control" name="nama_jabatan" placeholder="cari berdasarkan nama jabatan"><button class="btn btn-info" type="submit"><i class="fa fa-search">Cari</i></button>
        </div>
</form></center>

        <div class="panel-body">
        <a class="btn btn-success" href="{{url('jabatan/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>Kode Jabatan</th>
                        <th>Nama Jabatan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($jabatan as $data)
                <tbody >
                    <tr align="center"> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_jabatan}} </td>
                        <td> {{$data->nama_jabatan}}</td>
                        <td> Rp.{{$data->besaran_uang}}</td>
                        <td><form method="POST" action="{{ route('jabatan.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('jabatan.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$jabatan->links()}}
                </div>
        
            </div>
        </div>
    </div>
</div>
@endsection