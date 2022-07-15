<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset ('css/sb-admin-2.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Dashboard|Form Pasien</title>
</head>
<body>
    @include('partials.navdashboard')  
    <div class="container">
    <form action="{{route('pasien.store') }}" method="post">
      @csrf
</--------------------------------------------------------Kode pasien-----------------------------------------------------------------------------------*/>     
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pengisi</label>
            <div class="col-sm-1">
                <input class="form-control" placeholder="Staff" type="text" readonly>
            </div>
          </div>
</--------------------------------------------------------Nama-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required">
          </div>
        </div>
</--------------------------------------------------------Alamat-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-5" >
            <input type="text" class="form-control" name ="Alamat" placeholder="Alamat">
          </div>
        </div>
        

    </--------------------------------------------------------Lahir-----------------------------------------------------------------------------------*/>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Lahir</label>
      <div class="col-sm-5" >
        <input type="date" class="form-control" name ="Lahir" placeholder="Lahir">
      </div>
    </div>

</--------------------------------------------------------NIK-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">NIK (Kartu Keluarga)</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name ="NIK" placeholder="NIK">
          </div>
        </div>

        
    </--------------------------------------------------------Kelamin-----------------------------------------------------------------------------------*/>
    
    <div class="form-group row">
        <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
        <div class="col-sm-5">
                <select name="Kelamin" class="form-control">
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
        </div>
    </div>
    <br>
    
        </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Telepon</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name ="Telepon" placeholder="Nomer Telepon (aktif)">
          </div>
        </div>
        

    </--------------------------------------------------------Agama-----------------------------------------------------------------------------------*/>
    
    <div class="form group row">
        <label class="col-form-label col-sm-2 pt-0">Agama</label>
        <div class="col-sm-3">
          <select name="Agama" class="form-control">
              <option value="islam">Islam</option>
              <option value="protestan">Kristen Protestan</option>
              <option value="katolik">Kristen Katolik</option>
              <option value="hindu">Hindu</option>
              <option value="buddha">Buddha</option>
              <option value="konghucu">Konghucu</option>
          </select>
        </div>
      </div>
      <br>
    
    
    
        
    </--------------------------------------------------------Pendidikan-----------------------------------------------------------------------------------*/>
    <div class="form-group row">
      <label class="col-form-label col-sm-2 pt-0">Pendidikan</label>
      <div class="col-sm-5">
              <select name="Pendidikan" class="form-control">
                <option value="-">-</option>
                <option value="sltp/sd-smp">SLTP / SD-SMP</option>
                <option value="slta/sma">SLTA / SMA</option>
                <option value="sarjana">Sarjana</option>
              </select>
      </div>
  </div>

</--------------------------------------------------------Pekerjaan-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Pekerjaan</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name ="Pekerjaan" placeholder="Isi '-' jika belum/tidak bekerja ">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </form>
    </div>
</body>
</html>