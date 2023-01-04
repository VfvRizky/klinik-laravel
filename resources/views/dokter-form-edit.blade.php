<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset ('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Dashboard|Edit Dokter</title>
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
      <h1>Perubahan Data Dokter</h1>
        <br>
    <form action="{{route('dokter.update', $dokter->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')

</--------------------------------------------------------Nama-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required" value="{{ $dokter->nama }}">
          </div>
        </div>
</--------------------------------------------------------Alamat-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-5" >
            <input type="text" class="form-control" name ="Alamat" placeholder="Alamat" value="{{ $dokter->alamat }}">
          </div>
        </div>
        

      </--------------------------------------------------------Spesialis-----------------------------------------------------------------------------------*/>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Spesialis</label>
      <div class="col-sm-5" >
        <select name="Spesialis" class="form-control" value="{{ $dokter->spesialis}}">
          <option selected value =""></option>
          <option value="Umum" {{ $dokter->spesialis == 'Umum' ? 'selected' : ''}}>Umum</option>
          <option value="Gigi" {{ $dokter->spesialis == 'Gigi' ? 'selected' : ''}}>Gigi</option>
          <option value="Penyakit Dalam" {{ $dokter->spesialis == 'Penyakit Dalam' ? 'selected' : ''}}>Penyakit Dalam</option>
          <option value="Penyakit Luar" {{ $dokter->spesialis == 'Penyakit Luar' ? 'selected' : ''}}>Penyakit Luar</option>
        </select>
        
      </div>
    </div>

    
        </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Telepon</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="notelp" name ="Telepon" placeholder="Nomer Telepon (aktif)" value="{{ $dokter->telepon }}">
          </div>
        </div>
        

      </--------------------------------------------------------Jadwal-----------------------------------------------------------------------------------*/>
      
      <div class="form group row">
        <label class="col-form-label col-sm-2 pt-0">Jadwal Praktek Lama</label>
        <div class="col-sm-8">
          <input class="form-control" name="Jadwal" placeholder="jadwal..." type="text" value="{{ $dokter->jadwalpraktek }}" readonly>
        </div>
      </div>
      
      
    <div class="form group row">
        <label class="col-form-label col-sm-2 pt-0">Jadwal Praktek</label>
        <div class="col-sm-8">
          <select name="Jadwal" class="form-control" value="{{ $dokter->jadwalvariabel}}">
            <option selected value ="">tentukan jadwal praktek...</option>
            @foreach ($jadwalvariabel as $jadwal)
                        <option value="{{ $jadwal->id }}">{{ $jadwal->jadwalpraktek }}</option>
                        @endforeach
          </select>
        </div>
      </div>
      <br>
    
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Ubah</button>
          <a href="/dokter" class="btn btn-warning">Batal</a>
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
      setInputFilter(document.getElementById("notelp"), function(value) {
return /^-?\d*$/.test(value); }, "Isi dengan Angka");
  </script>

</body>
</html>