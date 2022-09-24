<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Dashboard|Form Dokter</title>
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
        <h1>Dokter Baru</h1>
        <br>
        <form action="{{ route('dokter.store') }}" method="post">
            @csrf
     
            </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required"
                        value="{{ old('Nama') }}">
                </div>
            </div>
            </--------------------------------------------------------Alamat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat"
                        placeholder="Alamat" value="{{ old('Alamat') }}">
                    @error('Alamat')
                        <div class="invalid-feedback">
                            "alamat masih kosong
                        </div>
                    @enderror
                </div>
            </div>


        </--------------------------------------------------------Spesialis-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-form-label col-sm-2 pt-0">Spesialis</label>
                <div class="col-sm-3">
                    <select name="Spesialis" class="form-control @error('Spesialis') is-invalid @enderror">
                        <option selected value="">pilih</option>
                        <option value="Umum" {{ old('Spesialis') != 'Umum' ?: 'selected' }}>Umum</option>
                        <option value="Gigi" {{ old('Spesialis') != 'Gigi' ?: 'selected' }}>Gigi</option>
                        <option value="Penyakit Dalam" {{ old('Spesialis') != 'Penyakit Dalam' ?: 'selected' }}>Penyakit Dalam</option>
                        <option value="Penyakit Luar" {{ old('Spesialis') != 'Penyakit Luar' ?: 'selected' }}>Penyakit Luar</option>
                    </select>
                    @error('Spesialis')
                        <div class="invalid-feedback">
                            "spesialis belum diisi
                        </div>
                    @enderror
                </div>
            </div>

            </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control @error('Telepon') is-invalid @enderror" id="notelp"
                        name="Telepon" placeholder="Nomer Telepon (aktif)" value="{{ old('Telepon') }}">
                    @error('Telepon')
                        <div class="invalid-feedback">
                            "nomer telepon masih kosong
                        </div>
                    @enderror
                </div>
            </div>


        </--------------------------------------------------------Jadwal Praktek-----------------------------------------------------------------------------------* />

            {{-- <div class="form group row">
                <label class="col-form-label col-sm-2 pt-0">Jadwal Praktek</label>
                <div class="col-sm-3">
                    <select name="Jadwal" class="form-control @error('Jadwal') is-invalid @enderror">
                        <option selected value="">tentukan jadwal praktek...</option>
                        <option value="xxx1" {{ old('Jadwal') != 'xxx1' ?: 'selected' }}>xxx1</option>
                        <option value="xxx2" {{ old('Jadwal') != 'xxx2' ?: 'selected' }}>xxx2</option>
                        <option value="xxx3" {{ old('Jadwal') != 'xxx3' ?: 'selected' }}>xxx3</option>
                        <option value="xxx4" {{ old('Jadwal') != 'xxx4' ?: 'selected' }}>xxx4</option>
                    </select>
                    @error('Jadwal')
                        <div class="invalid-feedback">
                            "jadwal belum diisi
                        </div>
                    @enderror
                </div>
            </div>
            <br> --}}
            <div class="form group row">
                <label class="col-form-label col-sm-2 pt-0">Jadwal Praktek</label>
                <div class="col-sm-3">
                    <select name="Jadwal" class="form-control @error('Jadwal') is-invalid @enderror">
                        <option selected value="">pilih jadwal...</option>
                        @foreach ($jadwals as $jadwal)
                        <option value="{{ $jadwal->id }}">{{ $jadwal->jadwal }}</option>
                        @endforeach
                    </select>
                    @error('Jadwal')
                        <div class="invalid-feedback">
                            "jadwal belum diisi
                        </div>
                    @enderror
                </div>
            </div>
            <br>
            

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/dokter" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div>

    <script>
        function setInputFilter(textbox, inputFilter, errMsg) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(
                function(event) {
                    textbox.addEventListener(event, function(e) {
                        if (inputFilter(this.value)) {
                            // Accepted value
                            if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
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
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
    </script>

</body>

</html>
