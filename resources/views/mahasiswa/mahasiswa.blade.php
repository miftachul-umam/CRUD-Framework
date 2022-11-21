<!DOCTYPE html>
<html>
<head>
    <title>CREATE DATA MAHASISWA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Create Data Mahasiswa
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('simpan')}}">
       @csrf
        <div class="form-group">
          <label>NIM</label>
          <input type="text" id="nim" name="nim" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>UMUR</label>
          <input type="number" id="umur" name="umur" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" id="alamat" name="alamat" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>KOTA</label>
          <input type="text" id="kota" name="kota" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>KELAS</label>
          <input type="text" id="kelas" name="kelas" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>JURUSAN</label>
          <input type="text" id="jurusan" name="jurusan" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Create_at</label>
          <input type="date" id="create_at" name="create_at" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Update_at</label>
          <input type="date" id="update_at" name="update_at" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>