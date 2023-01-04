<title>Poli / Spesialis</title>
    @include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    @endif
    <div class="container">
        <h1>Pilihan Poli / Spesialis Dokter</h1>
        <br>
        <form action="{{ route('poli.store') }}" method="post">
            @csrf

            </--------------------------------------------------------Poli-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Poli / Spesials Baru</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control"
                        placeholder="tuliskan Poli..." value="{{ old('Poli') }}" name="name" 
                        required oninvalid="this.setCustomValidity('Isi, jika ingin menambahkan Poli terbaru')" oninput="setCustomValidity('')">
                    
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus text-white"></i> Tambahkan</button>
                   
                </div>
            </div>
        </form>


        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Pilihan Poli / Spesialis</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($poli as $p)
                        <tr>
                            <td> {{ $count = $count + 1 }} </td>
                            <td> {{ $p->name }}</td>
                            <td> 
                                <a href="{{ route('poli.edit', $p->id) }}" class="btn btn-warning" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit Dokter">
                                    <i class="fas fa-pen text-white"></i>
                                </a>
                                </-------------------------------------------------------- hapus
                                    -----------------------------------------------------------------------------------* />
                                <form action="{{ route('poli.destroy', $p->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onClick="return confirm('Yakin ingin hapus Poli ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>