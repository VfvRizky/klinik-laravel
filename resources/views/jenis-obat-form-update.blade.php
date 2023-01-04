<title>Perubahan Jenis Obat</title>
@include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h1>Ubah Jenis Obat</h1>
        <br>
        <form action="{{ route('jenis.update', $jenis->id) }}" method="post">
            @csrf
            @method('PUT')
        </--------------------------------------------------------Jenis Obat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Obat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="jenis" placeholder="Jenis obat.." value="{{ $jenis->jenisobat }}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="/obat-jenis" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div>
