<title>Jadwal Praktek Baru</title>
@include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h1>Jadwal Praktek Baru</h1>
        <br>
        <form action="{{ route('jadwal.store') }}" method="post">
            @csrf
            
        </--------------------------------------------------------Jadwal Praktek-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jadwal Praktek</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control @error('Jadwal') is-invalid @enderror" name="Jadwal"
                        placeholder="tuliskan jadwal..." value="{{ old('Jadwal') }}">
                    @error('Jadwal')
                        <div class="invalid-feedback">
                            "Jadwal masih kosong
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/jadwal" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div>
