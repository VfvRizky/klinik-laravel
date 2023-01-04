<title>Pegawai Baru</title>
    @include('partials.navdashboard')
    
    @if ($errors->any())
    @foreach ($errors->all() as $item)
    <div class="alert alert-danger" role="alert">
        {{ $item }}
    </div>
    @endforeach
    
    @endif
    <div class="container">
        <h1>Pegawai Baru</h1>
        <br>
        <form action="{{ route('pegawai.store') }}" method="post">
            @csrf
     
        </--------------------------------------------------------Kode Pegawai-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Pegawai</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="KodePegawai" placeholder="Kode Pegawai..."
                        value="{{ old('KodePegawai') }}"
                        required oninvalid="this.setCustomValidity('Isi - jika tidak ada')" oninput="setCustomValidity('')">
                </div>
            </div>
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
                    <input type="text" class="form-control" name="Alamat"
                        placeholder="Alamat" value="{{ old('Alamat') }}"
                        required oninvalid="this.setCustomValidity('Isi - jika tidak tau')" oninput="setCustomValidity('')">
                </div>
            </div>


        </--------------------------------------------------------Kelamin-----------------------------------------------------------------------------------*/>
    
        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
            <div class="col-sm-5">
                <select name="Kelamin" value="{{ old('Kelamin') }}" class="form-control"
                required oninvalid="this.setCustomValidity('pilih salah satu...')" oninput="setCustomValidity('')">

                    <option selected value="">pilih...</option>
                    <option value="laki-laki" {{ old('Kelamin') != 'laki-laki' ?: 'selected' }}>Laki-laki</option>
                    <option value="perempuan" {{ old('Kelamin') != 'perempuan' ?: 'selected' }}>Perempuan</option>
                </select>
            </div>
        </div>

            </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="notelp"
                        name="Telepon" placeholder="Nomer Telepon (aktif)" value="{{ old('Telepon') }}"
                        required oninvalid="this.setCustomValidity('Isi 0 jika tidak tau')" oninput="setCustomValidity('')">
                </div>
            </div>


        </--------------------------------------------------------Agama-----------------------------------------------------------------------------------* />

        <div class="form group row">
            <label class="col-form-label col-sm-2 pt-0">Agama</label>
            <div class="col-sm-3">
                <select name="Agama" class="form-control @error('Agama') is-invalid @enderror">
                    <option selected value=""></option>
                    <option value="islam" {{ old('Agama') != 'islam' ?: 'selected' }}>Islam</option>
                    <option value="protestan" {{ old('Agama') != 'protestan' ?: 'selected' }}>Kristen Protestan</option>
                    <option value="katolik" {{ old('Agama') != 'katolik' ?: 'selected' }}>Kristen Katolik</option>
                    <option value="hindu" {{ old('Agama') != 'hindu' ?: 'selected' }}>Hindu</option>
                    <option value="buddha" {{ old('Agama') != 'buddha' ?: 'selected' }}>Buddha</option>
                    <option value="konghucu" {{ old('Agama') != 'konghucu' ?: 'selected' }}>Konghucu</option>
                </select>
                @error('Agama')
                    <div class="invalid-feedback">
                        "agama masih kosong
                    </div>
                @enderror
            </div>
        </div>
        <br>
    </--------------------------------------------------------Jabatan-----------------------------------------------------------------------------------* />

    <div class="form group row">
        <label class="col-form-label col-sm-2 pt-0">Jabatan</label>
        <div class="col-sm-3">
            <select name="Jabatan" class="form-control" required oninvalid="this.setCustomValidity('pilih jabatan...')"
            oninput="setCustomValidity('')">
                <option selected value="">pilih...</option>
                <option value="-" {{ old('Jabatan') != '-' ?: 'selected' }}>-</option>
                <option value="Perawat" {{ old('Jabatan') != 'Perawat' ?: 'selected' }}>Perawat</option>
                <option value="Apoteker" {{ old('Jabatan') != 'Apoteker' ?: 'selected' }}>Apoteker</option>
                <option value="Admin" {{ old('Jabatan') != 'Admin' ?: 'selected' }}>Admin</option>
                <option value="Bendahara" {{ old('Jabatan') != 'Bendahara' ?: 'selected' }}>Bendahara</option>
                <option value="Security" {{ old('Jabatan') != 'Security' ?: 'selected' }}>Security</option>
                
            </select>
           
        </div>
    </div>
            <br>
            

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/pegawai" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div>
