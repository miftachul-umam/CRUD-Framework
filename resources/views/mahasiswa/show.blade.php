<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container mt-4">
  
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Data Mahasiswa
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store')}}">

        <a href ="mahasiswa"<button type="submit" class="btn btn-primary">Tambah Data</button></a>
      </form>
      
      <table class="table table-bordered">
        <tr>
          <th>NIM</th>
          <th>NAMA</th>
          <th>UMUR</th>
          <th>ALAMAT</th>
          <th>KOTA</th>
          <th>KELAS</th>
          <th>JURUSAN</th>
          <th>CREATE_AT</th>
          <th>UPDATE_AT</th>
          <th>AKSI</th>
        </tr>
        
        @foreach ($dtmahasiswa as $mahasiswa)
        <tr>
          <td>{{$mahasiswa->nim}}</td>
          <td>{{$mahasiswa->nama}}</td>
          <td>{{$mahasiswa->umur}}</td>
          <td>{{$mahasiswa->alamat}}</td>
          <td>{{$mahasiswa->kota}}</td>
          <td>{{$mahasiswa->kelas}}</td>
          <td>{{$mahasiswa->jurusan}}</td>
          <td>{{date ('d-m-y', strtotime($mahasiswa->create_at))}}</td>
          <td>{{date ('d-m-y', strtotime($mahasiswa->update_at))}}</td>
          <td><a href="{{ url('edit')}}"><i class="bi bi-pencil-square"></i></a> | <a href="#"><i class="bi bi-trash" style="color: red"></i></a></td>
        </tr>
        @endforeach
    </div>
  </div>
</div>  
</body>
</html>