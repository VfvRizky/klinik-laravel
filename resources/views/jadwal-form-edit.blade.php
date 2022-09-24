<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset ('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Dashboard|Edit Jadwal</title>
</head>
<body>
    @include('partials.navdashboard')
    
  @if ($errors->any())
  @foreach ($errors->all() as $item)
  <div class="alert alert-danger" role="alert">
    {{ $item }}
  </div>
  @endforeach
  
  @endif  
    <div class="container">
      <h1>Perubahan Jadwal</h1>
        <br>
    <form action="{{route('jadwal.update', $jadwal->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      

    </--------------------------------------------------------Jadwal-----------------------------------------------------------------------------------*/>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Jadwal Lama</label>
      <div class="col-sm-5" >
        <input type="text" class="form-control" name ="Jadwal" placeholder="Jadwal" value="{{ $jadwal->jadwal }}" readonly>
      </div>
    </div>

    </--------------------------------------------------------Jadwal-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Jadwal Baru</label>
          <div class="col-sm-5" >
            <input type="text" class="form-control" name ="Jadwal" placeholder="Jadwal" value="{{ $jadwal->jadwal }}">
          </div>
        </div>
        


        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ubah</button>
            <a href="/jadwal" class="btn btn-warning">Batal</a>
          </div>
        </div>
      </form>
    </div>

</body>
</html>