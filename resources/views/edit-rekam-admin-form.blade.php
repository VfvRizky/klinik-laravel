<title>Ubah RekamMedis : {{ $rekam->pasien->nama }}</title>
    @include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        <h1>Edit Rekam</h1>
        <br>
        <form action="/updaterekamadmin" method="POST">
            @csrf
        </--------------------------------------------------------kodepasien-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kode Pasien</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Kodepasien" value="{{ $rekam->pasien->kodepasien }}"
                    readonly>
            </div>
        </div>

        </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required"
                    value="{{ $rekam->pasien->nama }}" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                    oninput="setCustomValidity('')" readonly>
            </div>
        </div>

        <input type="hidden" name="idrekam" value="{{ $rekam->id }}"> 
        <input type="hidden" name="idpasien" value="{{ $id_pasien }}"> 

        </--------------------------------------------------------Lahir-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lahir</label>
            <div class="col-sm-5">
                <input type="text" class="form-control @error('Lahir') is-invalid @enderror" name="Lahir"
                    placeholder="Lahir" value="{{ date("d/m/Y", strtotime($rekam->pasien->lahir)); }}" readonly>
                @error('Lahir')
                    <div class="invalid-feedback">
                        "tanggal lahir masih kosong
                    </div>
                @enderror
            </div>
        </div>

        <!--------------------------------------------------------Layanan----------------------------------------------------------------------------------- -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis layanan</label>
            <div class="col-sm-5">
                <select name="layanan" id="" class="form-control">
                    @if($rekam->layanan == 'Umum')
                        <option value="-">Pilih layanan..</option>
                        <option value="Umum" selected>{{ $rekam->layanan }}</option>
                        <option value="Asuransi">{{ 'Asuransi' }}</option>
                    @elseif($rekam->layanan == 'Asuransi')
                        <option value="-">Pilih layanan..</option>
                        <option value="Umum">{{ 'Umum' }}</option>
                        <option value="Asuransi" selected>{{ $rekam->layanan }}</option>
                    @else
                        <option value="-">Pilih layanan..</option>
                        <option value="Umum">{{ 'Umum' }}</option>
                        <option value="Asuransi">{{ 'Asuransi' }}</option>
                    @endif
                </select>
            </div>
        </div>

        <!--------------------------------------------------------keluhan pasien----------------------------------------------------------------------------------- -->
        <div class="form-group row mt-2">
            <label class="col-sm-2 col-form-label">Keluhan</label>
            <div class="col-sm-5">
                {{-- <input type="text" class="form-control" name="RekamMedis"
                placeholder="Anda sakit apa, dan sudah berapa lama?"> --}}
                <textarea type="text" name="keluhan" class="form-control" cols="30" rows="5"
                    placeholder="Jelaskan keluhan si Pasien, dan sudah berapa lama?">{{ $rekam->keluhan }}</textarea>
            </div>
        </div>

        <!--------------------------------------------------------dokter pemriksa----------------------------------------------------------------------------------- -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Dokter</label>
            <div class="col-sm-5">
                <select name="dokter" id="" class="form-control" value="{{ $rekam->dokter->nama ?? "-"}}">
                    <option value="">Pilih dokter..</option>
                    @foreach($dokter as $row)
                    <option value="{{ $row->id }}" {{ $rekam->dokter != '' ?? $row->dokter->id == $row->id ? 'selected' : ''}}> {{ $row->nama .' |'}} {{ $row->jadwal == '' ? 'Belum ada Jadwal' : $row->jadwal->jadwalpraktek }}</option>
                    @endforeach
                </select>
            </div>
        </div>

           <!--------------------------------------------------------DIAGNOSA----------------------------------------------------------------------------------- -->
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Diagnosa</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="diagnosa" placeholder="Diagnosa.."
                    required="required" value="{{ $rekam->diagnosa }}"
                    oninvalid="this.setCustomValidity('Diagnosa tidak boleh kosong')"
                    oninput="setCustomValidity('')">
            </div>
        </div>

        <!--------------------------------------------------------Obat----------------------------------------------------------------------------------- -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Obat</label>
            <div class="col-sm-5">
                <select name="obat" id="" class="form-control">
                    <option value="">Pilih obat..</option>
                    @foreach ($obat as $o)
                    <option value="{{ $o->id }}" {{ $rekam->obat != '' ?? $o->obat->nama == $o->nama->id ? 'selected' : ''}}> {{ $o->nama. " |Stok: " .$o->stok }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!--------------------------------------------------------banyaknya Obat----------------------------------------------------------------------------------- -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jumlah Obat</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="jumlahobat"
                    placeholder="Jumlah obat"  value="{{ $rekam->jumlahobat }}">
            </div>
        </div>

        <!--------------------------------------------------------keterangan----------------------------------------------------------------------------------- -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="keterangan"
                    placeholder="Keterangan.."  value="{{ $rekam->keterangan }}"
                   >
            </div>
        </div>

        </--------------------------------------------------------jalan /
                inap-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-form-label col-sm-2 pt-0">Ruang</label>
                <div class="col-sm-5">
                    <select name="Ruang" value="{{ old('Ruang') }}"
                        class="form-control @error('Ruang') is-invalid @enderror">

                        <option selected value="">pilih...</option>
                        <option value="R.Jalan" {{ $rekam->rawat == 'R.Jalan' ? 'selected' : '' }}>R. Jalan</option>
                        <option value="R.Inap" {{ $rekam->rawat == 'R.Inap' ? 'selected' : '' }}>R. Inap</option>
                    </select>
                    @error('Ruang')
                        <div class="invalid-feedback">
                            "pilih jalan / inap
                        </div>
                    @enderror
                </div>
            </div>

            </--------------------------------------------------------Golongan
            darah-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Golongan Darah</label>
            <div class="col-sm-5">
                <select name="Darah" value="{{ old('Darah') }}" class="form-control">
                    <option selected value="-">pilih...</option>
                    <option value="A+" {{ $rekam->darah != 'A+' ?: 'selected' }}>A+</option>
                    <option value="B+" {{ $rekam->darah  != 'B+' ?: 'selected' }}>B+</option>
                    <option value="AB+" {{ $rekam->darah != 'AB+' ?: 'selected' }}>AB+</option>
                    <option value="O+" {{ $rekam->darah != 'O+' ?: 'selected' }}>O+</option>
                    <option value="A-" {{ $rekam->darah != 'A-' ?: 'selected' }}>A-</option>
                    <option value="B-" {{ $rekam->darah != 'B-' ?: 'selected' }}>B-</option>
                    <option value="AB-" {{ $rekam->darah != 'AB-' ?: 'selected' }}>AB-</option>
                    <option value="O-" {{ $rekam->darah != 'O-' ?: 'selected' }}>O-</option>
                </select>
            </div>
        </div>

          <!--------------------------------------------------------Tinggi Badan----------------------------------------------------------------------------------- -->
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tinggi Badan</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="Tinggi" placeholder="Tinggi Badan (Cm)"
                    value="{{ $rekam->tinggi }}">
            </div>
        </div>

        <!--------------------------------------------------------Berat Badan----------------------------------------------------------------------------------- -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Berat Badan</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="Berat" placeholder="Berat Badan (Kg)"
                     value="{{ $rekam->berat }}">
            </div>
        </div>

        <!--------------------------------------------------------lingkar Pinggang----------------------------------------------------------------------------------- -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lingkar Badan</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="LingkarBadan" placeholder="Lingkar Badan (Cm)"
                     value="{{ $rekam->pinggang }}">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('pasien.edit', $id_pasien) }}" class="btn btn-warning">Kembali</a>
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
