<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset ('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Dashboard|Edit Pasien</title>
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
    <form action="{{route('pasien.update', $pasien->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
</-------------------------------------------------------- Pengisi -----------------------------------------------------------------------------------*/>     
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pengisi</label>
            <div class="col-sm-1">
                <input class="form-control" name="Kodepasien" placeholder="Staff" type="text" readonly>
            </div>
          </div>
</--------------------------------------------------------Nama-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required" value="{{ $pasien->nama }}">
          </div>
        </div>
</--------------------------------------------------------Alamat-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-5" >
            <input type="text" class="form-control" name ="Alamat" placeholder="Alamat" value="{{ $pasien->alamat }}">
          </div>
        </div>
        

    </--------------------------------------------------------Lahir-----------------------------------------------------------------------------------*/>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Lahir</label>
      <div class="col-sm-5" >
        <input type="date" class="form-control" name ="Lahir" value="{{ $pasien->lahir->format('Y-m-d') }}">
        
      </div>
    </div>

</--------------------------------------------------------NIK-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">NIK (Kartu Keluarga)</label>
          <div class="col-sm-5">
            <input type="text" class="form-control " id="nonik" name ="NIK" placeholder="NIK" value="{{ $pasien->nik }}">
          </div>
        </div>

        
    </--------------------------------------------------------Kelamin-----------------------------------------------------------------------------------*/>
    
    <div class="form-group row">
        <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
        <div class="col-sm-5">
                <select name="Kelamin" class="form-control" value="{{ $pasien->kelamin }}">
                  <option selected value =""></option>
                  <option value="laki-laki" {{ $pasien->kelamin == 'laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                  <option value="perempuan" {{ $pasien->kelamin == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
                </select>
        </div>
    </div>
    <br>
    
        </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Telepon</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="notelp" name ="Telepon" placeholder="Nomer Telepon (aktif)" value="{{ $pasien->telepon }}">
          </div>
        </div>
        

    </--------------------------------------------------------Agama-----------------------------------------------------------------------------------*/>
    
    <div class="form group row">
        <label class="col-form-label col-sm-2 pt-0">Agama</label>
        <div class="col-sm-3">
          <select name="Agama" class="form-control" value="{{ $pasien->agama }}">
            <option selected value =""></option>
              <option value="islam" {{ $pasien->agama == 'islam' ? 'selected' : ''}}>Islam</option>
              <option value="protestan" {{ $pasien->agama == 'protestan' ? 'selected' : ''}}>Kristen Protestan</option>
              <option value="katolik" {{ $pasien->agama == 'katolik' ? 'selected' : ''}}>Kristen Katolik</option>
              <option value="hindu" {{ $pasien->agama == 'hindu' ? 'selected' : ''}}>Hindu</option>
              <option value="buddha" {{ $pasien->agama == 'buddha' ? 'selected' : ''}}>Buddha</option>
              <option value="konghucu" {{ $pasien->agama == 'konghucu' ? 'selected' : ''}}>Konghucu</option>
          </select>
        </div>
      </div>
      <br>
    
    
    
        
    </--------------------------------------------------------Pendidikan-----------------------------------------------------------------------------------*/>
    <div class="form-group row">
      <label class="col-form-label col-sm-2 pt-0">Pendidikan</label>
      <div class="col-sm-5">
              <select name="Pendidikan" class="form-control" value="{{ $pasien->pendidikan }}">
                <option value="-">-</option>
                <option value="sltp/sd-smp" {{ $pasien->pendidikan == 'sltp/sd-smp' ? 'selected' : ''}}>SLTP / SD-SMP</option>
                <option value="slta/sma" {{ $pasien->pendidikan == 'slta/sma' ? 'selected' : ''}}>SLTA / SMA</option>
                <option value="sarjana" {{ $pasien->pendidikan == 'sarjana' ? 'selected' : ''}}>Sarjana</option>
              </select>
      </div>
  </div>

</--------------------------------------------------------Pekerjaan-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Pekerjaan</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name ="Pekerjaan" placeholder="Isi '-' jika belum/tidak bekerja " value="{{ $pasien->pekerjaan }}">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ubah</button>
            <a href="/pasien" class="btn btn-warning">Batal</a>
          </div>
        </div>
      </form>
    </div>

    <script>
      function setInputFilter(textbox, inputFilter, errMsg) {
["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
  textbox.addEventListener(event, function(e) {
    if (inputFilter(this.value)) {
      // Accepted value
      if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
        this.classList.remove("input-error");
        this.setCustomValidity("");
      }
      this.oldValue = this.value;
      this.oldSelectionStart = this.selectionStart;
      this.oldSelectionEnd = this.selectionEnd;
    } else if (this.hasOwnProperty("oldValue")) {
      // Rejected value - restore the previous one
      this.classList.add("input-error");
      this.setCustomValidity(errMsg);
      this.reportValidity();
      this.value = this.oldValue;
      this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
    } else {
      // Rejected value - nothing to restore
      this.value = "";
    }
  });
});
}

      setInputFilter(document.getElementById("nonik"), function(value) {
return /^-?\d*$/.test(value); }, "Isi dengan Angka");
      setInputFilter(document.getElementById("notelp"), function(value) {
return /^-?\d*$/.test(value); }, "Isi dengan Angka");
  </script>

</body>
</html>