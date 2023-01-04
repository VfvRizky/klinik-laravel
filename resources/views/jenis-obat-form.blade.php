<title>Pilihan Jenis Obat Baru</title>
    @include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h1>Pilihan Baru untuk Jenis Obat</h1>
        <br>
        <form action="{{ route('jenis.store') }}" method="post">
            @csrf
        </--------------------------------------------------------Kode Obat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Obat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="jenis" placeholder="Jenis obat.." required="required"
                        value="{{ old('jenis') }}" oninvalid="this.setCustomValidity('Kode obat tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/obat-jenis" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div>
