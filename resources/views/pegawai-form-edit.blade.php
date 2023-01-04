<title>Pegawai : {{ $pegawai->nama }}</title>
    @include('partials.navdashboard')
    
    @if ($errors->any())
    @foreach ($errors->all() as $item)
    <div class="alert alert-danger" role="alert">
        {{ $item }}
    </div>
    @endforeach
    
    @endif
    <div class="container">
        <h1>Ubah Data Pegawai</h1>
        <br>
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
     
        </--------------------------------------------------------Kode Pegawai-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Pegawai</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="KodePegawai" placeholder="KodePegawai" required
                        value="{{ $pegawai->kodepegawai }}" oninvalid="this.setCustomValidity('Isi - jika tidak tau')" oninput="setCustomValidity('')">
                </div>
            </div>
            </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required"
                        value="{{ $pegawai->nama }}" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
            </--------------------------------------------------------Alamat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Alamat" placeholder="Alamat"
                        value="{{ $pegawai->alamat }}">
                </div>
            </div>


        </--------------------------------------------------------Kelamin-----------------------------------------------------------------------------------*/>
    
        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
            <div class="col-sm-5">
                <select name="Kelamin" class="form-control" value="{{ $pegawai->kelamin }}"
                    required oninvalid="this.setCustomValidity('pilih salah satu...')"
                                    oninput="setCustomValidity('')">
                    <option selected value ="">pilih...</option>
                    <option value="laki-laki" {{ $pegawai->kelamin == 'laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                    <option value="perempuan" {{ $pegawai->kelamin == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
                  </select>
            </div>
        </div>

            </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="notelp" name="Telepon"
                    placeholder="Nomer Telepon (aktif)" value="{{ $pegawai->telepon }}"
                    required oninvalid="this.setCustomValidity('isi 0 jika tidak tau')"
                                    oninput="setCustomValidity('')">
                </div>
            </div>


        </--------------------------------------------------------Agama-----------------------------------------------------------------------------------* />

        <div class="form group row">
            <label class="col-form-label col-sm-2 pt-0">Agama</label>
            <div class="col-sm-3">
                <select name="Agama" class="form-control" required
                                oninvalid="this.setCustomValidity('agama tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                                <option selected value="">Pilih agama..</option>
                                <option value="islam" {{ $pegawai->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                                <option value="protestan" {{ $pegawai->agama == 'protestan' ? 'selected' : '' }}>Kristen
                                    Protestan
                                </option>
                                <option value="katolik" {{ $pegawai->agama == 'katolik' ? 'selected' : '' }}>Kristen Katolik
                                </option>
                                <option value="hindu" {{ $pegawai->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="buddha" {{ $pegawai->agama == 'buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="konghucu" {{ $pegawai->agama == 'konghucu' ? 'selected' : '' }}>Konghucu
                                </option>
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

            <select name="Jabatan" class="form-control" required
                                oninvalid="this.setCustomValidity('pilih - jika tidak tau')"
                                oninput="setCustomValidity('')">
                                <option selected value="">pilih...</option>
                                <option value="-" {{ $pegawai->jabatan == '-' ? 'selected' : '' }}>-</option>
                                <option value="Perawat" {{ $pegawai->jabatan == 'Perawat' ? 'selected' : '' }}>Perawat</option>
                                <option value="Apoteker" {{ $pegawai->jabatan == 'Apoteker' ? 'selected' : '' }}>Apoteker</option>
                                <option value="Admin" {{ $pegawai->jabatan == 'Admin' ? 'selected' : '' }}>Admin</option>
                                <option value="Bendahara" {{ $pegawai->jabatan == 'Bendahara' ? 'selected' : '' }}>Bendahara</option>
                                <option value="Security" {{ $pegawai->jabatan == 'Security' ? 'selected' : '' }}>Security</option>
                            </select>
           
        </div>
    </div>
            <br>
            

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/pegawai" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div>
