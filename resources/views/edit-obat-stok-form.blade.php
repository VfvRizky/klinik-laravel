<title>Perubahan data Obat : {{ $data->nama }}</title>
@include('partials.navdashboard')


    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h1>Perubahan Data Obat</h1>
        <br>
        <form action="{{ route('obat.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

        </--------------------------------------------------------Kode Obat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Obat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="kode" placeholder="Kode obat.."
                        value="{{ $data->kodeobat }}" oninvalid="this.setCustomValidity('Kode obat tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
            </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Obat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="namaobat" placeholder="Nama obat.." required="required"
                        value="{{ $data->nama }}" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
        </--------------------------------------------------------Jenis-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Jenis Obat</label>
            <div class="col-sm-5">
                <select name="jenis" class="form-control @error('Kelamin') is-invalid @enderror">
                    <option selected value="">Pilih jenis...</option>
                    @foreach($jenis as $j)
                        <option value="{{ $j->id }}" {{ $data->id_jenis == $j->id ? 'selected' : '' }}>{{ $j->jenisobat }}</option>
                    @endforeach
                </select>
                @error('Kelamin')
                    <div class="invalid-feedback">
                        "pilih jenis obat
                    </div>
                @enderror
            </div>
        </div>

        </--------------------------------------------------------tanggal expired-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Expired</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control @error('Lahir') is-invalid @enderror" name="expired"
                        placeholder="Lahir" value="{{ $data->expired }}">
                    @error('Lahir')
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
                    <input type="text" name="dosis" class="form-control"placeholder="Dosis..." value="{{ $data->dosis }}">
                    @error('NIK')
                        <div class="invalid-feedback">
                            "dosis masih kosong
                        </div>
                    @enderror
                </div>
            </div>


        </--------------------------------------------------------Photo-----------------------------------------------------------------------------------* />

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gambar obat</label>
                <div class="col-sm-5">
                    <img src="/image/{{ $data->photo }}" alt="" width="100%">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="notelp"
                        name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            *format obat salah, gunakan (jpg atau png)
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga Obat (Rp)</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control @error('Telepon') is-invalid @enderror" id="notelp"
                        name="harga" placeholder="Harga obat.." value="{{ $data->harga }}" required min="0">
                    @error('harga')
                        <div class="invalid-feedback">
                            "harga obat masih kosong
                        </div>
                    @enderror
                </div>
            </div>
         

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="/obat-total-stok" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div>
