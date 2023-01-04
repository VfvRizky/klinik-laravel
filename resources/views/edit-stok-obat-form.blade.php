<title>Stok Obat : {{ $obat->nama }}</title>
    @include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h1>Edit Stok Obat</h1>
        <h3>{{ $obat->nama }}</h3>
        <br>
        <form action="/tambahstok" method="POST">
        {{-- @method('PATCH') --}}
        @csrf
            <input type="hidden" name="id_obat" value="{{ $obat->id }}">

        </--------------------------------------------------------Stok lama Obat-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Stok Obat</label>
            <div class="col-sm-1">
                <input type="text" class="form-control" name="kode" value="{{ $obat->stok }}" readonly>
            </div>
        </div>

    </--------------------------------------------------------Stok baru Obat-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Stok Tambahan</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="jumlahtambahan" placeholder="Tambahan jumlah obat" 
                required min="0"
                oninvalid="this.setCustomValidity('Masukkan Jumlah Stok')" oninput="setCustomValidity('')">
            </div>
        </div>
    
    </--------------------------------------------------------Expired Before-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Expired Sebelumnya</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" name ="expired" value="{{ $obat->expired }}" readonly>
            </div>
        </div>

    </--------------------------------------------------------New Expired-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Expired Terbaru</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" name="expired"
                    placeholder="expired" value="{{ old('expired') }}" required
                    oninvalid="this.setCustomValidity('set tanggal terbaru')" oninput="setCustomValidity('')">
               
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
