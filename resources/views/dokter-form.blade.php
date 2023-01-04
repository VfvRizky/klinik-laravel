<title>Dokter Baru</title>
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
                        value="{{ old('Nama') }}" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
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
                    <input type="number" class="form-control @error('Telepon') is-invalid @enderror" id="notelp"
                        name="Telepon" placeholder="Nomer Telepon (aktif)" value="{{ old('Telepon') }}">
                    @error('Telepon')
                        <div class="invalid-feedback">
                            "nomer telepon masih kosong
                        </div>
                    @enderror
                </div>
            </div>


        </--------------------------------------------------------Jadwal Praktek-----------------------------------------------------------------------------------* />
            <div class="form group row">
                <label class="col-form-label col-sm-2 pt-0">Jadwal Praktek</label>
                <div class="col-sm-8">
                    <select name="Jadwal" class="form-control @error('Jadwal') is-invalid @enderror">
                        <option selected value="">pilih jadwal...</option>
                        @foreach ($jadwalvariabel as $jadwal)
                        <option value="{{ $jadwal->id }}">{{ $jadwal->jadwalpraktek }}</option>
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
