<title>Dokter : {{ $dokter->nama }}</title>
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
        <form action="{{ route('dokter.update', $dokter->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required"
                        value="{{ $dokter->nama }}" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
            </--------------------------------------------------------Alamat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Alamat" placeholder="Alamat"
                        value="{{ $dokter->alamat }}">
                </div>
            </div>


            </--------------------------------------------------------Spesialis-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-form-label col-sm-2 pt-0">Spesialis</label>
                <div class="col-sm-3">
                    <select name="Spesialis" class="form-control @error('Spesialis') is-invalid @enderror">
                        <option selected value="">pilih poli / spesialis</option>
                        @foreach($poli as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
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
                    <input type="number" class="form-control" id="notelp" name="Telepon"
                        placeholder="Nomer Telepon (aktif)" value="{{ $dokter->telepon }}">
                </div>
            </div>


            </--------------------------------------------------------Jadwal lama-----------------------------------------------------------------------------------* />

            <div class="form group row">
                <label class="col-form-label col-sm-2 pt-0">Jadwal Praktek Lama</label>
                <div class="col-sm-8">
                    <input class="form-control" value="{{ $dokter->jadwal->jadwalpraktek ?? "-" }}" readonly>
                </div>
            </div>

        </--------------------------------------------------------Jadwal baru-----------------------------------------------------------------------------------* />
            <div class="form group row">
                <label class="col-form-label col-sm-2 pt-0">Jadwal Praktek Baru</label>
                <div class="col-sm-8">
                    <select name="Jadwal" class="form-control" value="{{ $dokter->jadwal->jadwalpraktek ?? "-"}}"
                        required oninvalid="this.setCustomValidity('Pilih Jadwal Praktek')" oninput="setCustomValidity('')">
                        <option selected value="">tentukan jadwal praktek baru...</option>
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
