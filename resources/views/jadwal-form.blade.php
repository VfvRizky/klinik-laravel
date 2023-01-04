<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Dashboard|Form Jadwal</title>
</head>

<body>
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

</body>

</html>
