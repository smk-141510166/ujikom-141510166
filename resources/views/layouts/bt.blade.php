<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Penggajian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background:#87CEFA">

<nav style="background:#1E90FF">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#000080">SMK ASSALAAM BANDUNG</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="color:#000080">Menu<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('/jabatan') }}">Jabatan</a></li>
          <li><a href="{{ url('/golongan') }}">Golongan</a></li>
          <li><a href="{{ url('/kategori') }}">Kategori Lembur</a></li>
          <li><a href="{{ url('/tunjangan') }}">Tunjangan</a></li>
          <li><a href="{{ url('/pegawai') }}">Pegawai</a></li>
          <li><a href="{{ url('/lemburpegawai') }}">Lembur Pegawai</a></li>
          <li><a href="{{ url('/tunjanganpegawai') }}">Tunjangan Pegawai</a></li>
          <li><a href="{{ url('/penggajian') }}">Penggajian</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav><br>
  
<div class="container">
    @yield('content')
</div>

</body>
</html>