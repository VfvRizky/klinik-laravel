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
        <h1>Data Pasien</h1>
        <br>

        </-------------------------------------------------------- Tabel
            -----------------------------------------------------------------------------------* />
        <a href="/pasien/create" type="button" class="btn btn-success">Tambah Pasien</a>
        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Pasien</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomer Telepon</th>
                        <th>Agama</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datapasien as $p)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $p->kodepasien }} </td>
                            <td> {{ $p->nama }} </td>
                            <td> {{ $p->alamat }} </td>
                            <td> {{ $p->lahir->format('Y/m/d') }} </td>
                            <td> {{ $p->nik }} </td>
                            <td> {{ $p->kelamin }} </td>
                            <td> {{ $p->telepon }} </td>
                            <td> {{ $p->agama }} </td>
                            <td> {{ $p->pendidikan }} </td>
                            <td> {{ $p->pekerjaan }} </td>

                            </-------------------------------------------------------- edit
                                -----------------------------------------------------------------------------------* />
                            <td class="text-sm">
                                {{-- <a href="{{ route('pasien.edit', $p->id) }}" class="mx-3" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit Pasien">
                                    <i class="fas fa-pen text-warning"></i>
                                </a> --}}

                                </-------------------------------------------------------- lihat
                                    -----------------------------------------------------------------------------------* />
                                <a href="{{ route('pasien.edit', $p->id) }}" data-bs-toggle="tooltip" data-bs-original-title="Lihat Pasien">
                                    <i class="fas fa-book text-success"></i>
                                </a>

                                </-------------------------------------------------------- hapus
                                    -----------------------------------------------------------------------------------* />
                                <form action="{{ route('pasien.destroy', $p->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="badge bg-danger"
                                        onClick="return confirm('Yakin ingin hapus data?')">hapus</button>

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
                        "searchPlaceholder": "Cari nama pasien",
                        "zeroRecords": "Tidak ditemukan data yang sesuai",
                        "emptyTable": "Tidak terdapat data di tabel"
                    }
                });
            });
        </script>
    @endpush
@endsection
