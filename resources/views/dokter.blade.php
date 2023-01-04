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
        <h1>Data Dokter</h1>
        <br>

        </-------------------------------------------------------- Tabel
            -----------------------------------------------------------------------------------* />
        <a href="/dokter/create" type="button" class="btn btn-success">Tambah Dokter</a>
        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Spesialis</th>
                        <th>Nomer Telepon</th>
                        <th>Jadwal Praktek</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datadokter as $d)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $d->nama }} </td>
                            <td> {{ $d->alamat }} </td>
                            <td> {{ $d->spesialis }} </td>
                            <td> {{ $d->telepon }} </td>
                            <td> {{ $d->jadwalpraktek}} </td>

                            </-------------------------------------------------------- edit
                                -----------------------------------------------------------------------------------* />
                            <td class="text-sm">
                                <a href="{{ route('dokter.edit', $d->id) }}" class="mx-3" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit Dokter">
                                    <i class="fas fa-pen text-warning"></i>
                                </a>

                                {{-- </-------------------------------------------------------- lihat
                                    -----------------------------------------------------------------------------------* />
                                <a href="/dokter/create" data-bs-toggle="tooltip" data-bs-original-title="Lihat Dokter">
                                    <i class="fas fa-book text-success"></i>
                                </a> --}}

                                </-------------------------------------------------------- hapus
                                    -----------------------------------------------------------------------------------* />
                                <form action="{{ route('dokter.destroy', $d->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="badge bg-danger"
                                        onClick="return confirm('Yakin ingin hapus data?')">delete</button>

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
                    dom: 'lBfrtip',
                    orderable: [
                        [11, "asc"]
                    ],
                    lengthMenu: [
                        [5, 10, 25, 50, 100, 1000, -1],
                        ['5', '10', '25', '50', '100', '1000', 'All']
                    ],
                    buttons: [{
                            extend: 'csv',
                            text: 'Export',
                            exportOptions: {
                                modifier: {
                                    page: 'all',
                                    search: 'none'
                                },
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                            }
                        },
                        {
                            extend: 'pdf',
                            text: 'Pdf',
                            exportOptions: {
                                modifier: {
                                    page: 'all',
                                    search: 'none'
                                },
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                            }
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            exportOptions: {
                                modifier: {
                                    page: 'all'
                                },
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                            }
                        },

                    ],
                    language: {
                        "searchPlaceholder": "Cari nama dokter",
                        "zeroRecords": "Tidak ditemukan data yang sesuai",
                        "emptyTable": "Tidak terdapat data di tabel"
                    }
                });
            });
        </script>
    @endpush
@endsection
