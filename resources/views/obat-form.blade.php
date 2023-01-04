<title>Obat Baru</title>
@include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h1>Obat Baru</h1>
        <br>
        <form action="{{ route('obat.store') }}" method="post" enctype="multipart/form-data">
            @csrf

        </--------------------------------------------------------Kode Obat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Obat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="kode" placeholder="Kode obat.."
                        value="{{ old('kode') }}" oninvalid="this.setCustomValidity('Kode obat tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
            </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Obat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="namaobat" placeholder="Nama obat.." required="required"
                        value="{{ old('namaobat') }}" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
            
        </--------------------------------------------------------tanggal expired-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Expired</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control @error('expired') is-invalid @enderror" name="expired"
                        placeholder="Tanggal Expired" value="{{ old('expired') }}">
                    @error('expired')
                        <div class="invalid-feedback">
                            "tanggal expired masih kosong
                        </div>
                    @enderror
                </div>
            </div>

        </--------------------------------------------------------Dosis-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Dosis</label>
                <div class="col-sm-5">
                    <input type="text" name="dosis" class="form-control"placeholder="Dosis..." value="{{ old('dosis') }}">
                    @error('dosis')
                        <div class="invalid-feedback">
                            "dosis masih kosong
                        </div>
                    @enderror
                </div>
            </div>

        </--------------------------------------------------------Jenis-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Jenis Obat</label>
            <div class="col-sm-5">
                <select name="jenis" value="{{ old('jenis') }}" class="form-control @error('Jenis') is-invalid @enderror">
                    <option selected value="">Pilih jenis...</option>
                    @foreach($jenis as $j)
                    <option value="{{ $j->id }}">{{ $j->jenisobat }}</option>
                    @endforeach
                </select>
                @error('Jenis')
                <div class="invalid-feedback">
                    "pilih jenis obat
                </div>
                @enderror
            </div>
        </div>

        </--------------------------------------------------------Stok-----------------------------------------------------------------------------------* />
        
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Stok Obat</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok"
                        name="stok" placeholder="Masukkan Jumlah Awal..." value="{{ old('stok') }}" min="0">
                        @error('stok')
                        <div class="invalid-feedback">
                            "stok obat masih kosong
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga Obat</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                        name="harga" placeholder="Harga obat.." value="{{ old('harga') }}" min="0">
                    @error('harga')
                        <div class="invalid-feedback">
                            "harga obat masih kosong
                        </div>
                    @enderror
                </div>
            </div>
        </--------------------------------------------------------Photo-----------------------------------------------------------------------------------* />
    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gambar obat</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" value="{{ old('image') }}" accept=".jpg, .jpeg, .png">
                    @error('image')
                        <div class="invalid-feedback">
                            *format obat salah, gunakan (jpg atau png)
                        </div>
                    @enderror
                </div>
            </div>
         

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/obat-total-stok" class="btn btn-warning">Kembali</a>
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

        setInputFilter(document.getElementById("nonik"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
        setInputFilter(document.getElementById("notelp"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
    </script>

</body>

</html>
