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
        <h1>Semua Jadwal Praktek</h1>
        <br>

        </-------------------------------------------------------- Tabel
            -----------------------------------------------------------------------------------* />
        <a href="/jadwal/create" type="button" class="btn btn-success">Tambah Jadwal Praktek</a>
        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Jadwal</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwalpraktek as $jp)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $jp->jadwal }} </td>

                            </-------------------------------------------------------- edit
                                -----------------------------------------------------------------------------------* />
                            <td class="text-sm">
                                {{-- <a href="{{ route('jadwal.edit', $jp->id) }}" class="mx-3" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit Jadwal">
                                    <i class="fas fa-pen text-warning"></i>
                                </a> --}}

                                </-------------------------------------------------------- lihat
                                    -----------------------------------------------------------------------------------* />
                                <a href="{{ route('jadwal.edit', $jp->id) }}" data-bs-toggle="tooltip" data-bs-original-title="Lihat Pasien">
                                    <i class="fas fa-calendar text-success"></i>
                                </a>

                                </-------------------------------------------------------- hapus
                                    -----------------------------------------------------------------------------------* />
                                <form action="{{ route('jadwal.destroy', $jp->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="badge bg-danger"
                                        onClick="return confirm('Yakin ingin hapus jadwal?')">hapus</button>

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
                    
                    orderable: [
                        [1, "asc"]
                    ],
                    lengthMenu: [
                        [5, 10, 25, 50, 100, 1000, -1],
                        ['5', '10', '25', '50', '100', '1000', 'All']
                    ],
                    
                    language: {
                        "searchPlaceholder": "Cari jadwal",
                        "zeroRecords": "Tidak ditemukan jadwal",
                        "emptyTable": "Tidak terdapat jadwal di tabel"
                    }
                });
            });
        </script>
    @endpush
@endsection
