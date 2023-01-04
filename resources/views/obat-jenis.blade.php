<title>Jenis - Obat</title>
@extends('layouts.main')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h1>Pilihan Jenis Obat</h1>
        <br>

        </-------------------------------------------------------- Tabel
            -----------------------------------------------------------------------------------* />
        <a href="/jenis-obat-create" type="button" class="btn btn-success">
            <i class="fas fa-plus text-white"></i> <i class="fas fa-database text-white"></i>  Tambah Jenis Obat</a>
        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenis as $p)
                        <tr>
                            <td> {{ $count = $count + 1 }} </td>
                            <td> {{ $p->jenisobat }}</td>

                            <td class="text-sm">
                                <a href="{{ route('jenis.edit', $p->id) }}" class="btn btn-warning" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit Pasien">
                                    <i class="fas fa-pen text-white"></i>
                                </a>

                                <form action="{{ route('jenis.destroy', $p->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onClick="return confirm('Yakin ingin hapus data?')">
                                        <i class="fas fa-trash"></i></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#products-list').DataTable({
                    
                    lengthMenu: [
                        [10, 25, 100, -1],
                        ['10', '25', '100', 'All']
                    ],
                    language: {
                        "searchPlaceholder": "Cari Jenis obat",
                        "zeroRecords": "Tidak ditemukan Jenis Obat yang sesuai",
                        "emptyTable": "Tidak terdapat data di tabel"
                    }
                });
            });
        </script>
    @endpush
@endsection
