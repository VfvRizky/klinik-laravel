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
    <title>Dashboard|Rekam Medis Pasien</title>
</head>

<body>
    @include('partials.navdashboard')
    {{-- {{ dd($dokter) }} --}}
    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h4>Rekam Medis Pasien atas nama:</h4>
        <h1>{{ $pasien->nama }}</h1>
        <br>
        <form action="{{ route('pasien.update', $pasien->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}

            </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
            {{-- <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required" value="{{ $pasien->nama }}"readonly>
          </div>
        </div> --}}
            </--------------------------------------------------------Alamat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Alamat" placeholder="Alamat"
                        value="{{ $pasien->alamat }}"readonly>
                </div>
            </div>


            </--------------------------------------------------------Lahir-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Lahir</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="Lahir"
                        value="{{ $pasien->lahir->format('Y-m-d') }}"readonly>

                </div>
            </div>

            </--------------------------------------------------------NIK-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK (Kartu Keluarga)</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control " id="nonik" name="NIK" placeholder="NIK"
                        value="{{ $pasien->nik }}"readonly>
                </div>
            </div>


            </--------------------------------------------------------Kelamin-----------------------------------------------------------------------------------* />

            <div class="form-group row">
                <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Kelamin"
                        placeholder="Isi '-' jika belum/tidak bekerja " value="{{ $pasien->kelamin }}"readonly>
                </div>
            </div>
            <br>

            </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="notelp" name="Telepon"
                        placeholder="Nomer Telepon (aktif)" value="{{ $pasien->telepon }}"readonly>
                </div>
            </div>


            </--------------------------------------------------------Agama-----------------------------------------------------------------------------------* />

            <div class="form group row">
                <label class="col-form-label col-sm-2 pt-0">Agama</label>
                <div class="col-sm-3">

                    <input type="text" class="form-control" name="Agama"
                        placeholder="Isi '-' jika belum/tidak bekerja " value="{{ $pasien->agama }}"readonly>
                </div>
            </div>
            <br>




            </--------------------------------------------------------Pendidikan-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-form-label col-sm-2 pt-0">Pendidikan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Pendidikan"
                        placeholder="Isi '-' jika belum/tidak bekerja " value="{{ $pasien->pendidikan }}"readonly>
                </div>
            </div>

            </--------------------------------------------------------Pekerjaan-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Pekerjaan"
                        placeholder="Isi '-' jika belum/tidak bekerja " value="{{ $pasien->pekerjaan }}"readonly>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                  <a href="#" class="btn btn-primary">Tambah Rekam Medis</a>
                  <button type="#" class="btn btn-warning">Ubah Data Pasien</button>
                    <a href="/pasien" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
    <div class="container">

      <div class="table-responsive">
        <table class="table table-flush" id="products-list">
          <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Tanggal Periksa</th>
                    <th>Keluhan</th>
                    <th>Dokter</th>
                    <th>Diagnosa</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>



                    {{-- </-------------------------------------------------------- edit
                          -----------------------------------------------------------------------------------* />
                      <td class="text-sm">
                          <a href="{{ route('pasien.edit', $p->id) }}" class="mx-3" data-bs-toggle="tooltip"
                              data-bs-original-title="Edit Pasien">
                              <i class="fas fa-pen text-warning"></i>
                          </a>

                          </-------------------------------------------------------- hapus
                              -----------------------------------------------------------------------------------* />
                          <form action="{{ route('pasien.destroy', $p->id) }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="badge bg-danger"
                                  onClick="return confirm('Yakin ingin hapus data?')">delete</button>

                          </form>
                      </td> --}}
                {{-- </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
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

        setInputFilter(document.getElementById("nonik"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
        setInputFilter(document.getElementById("notelp"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
    </script>

</body>

</html>
