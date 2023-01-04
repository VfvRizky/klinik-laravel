<title>Dokter</title>
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
        <a href="/dokter/create" type="button" class="btn btn-success">
            <i class="fas fa-plus text-white"></i> <i class="fas fa-user-md text-white"></i>  Tambah Dokter</a>
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
                            <td> {{ $d->poli->name ?? "Poli kosong"}} </td>
                            <td> {{ $d->telepon }} </td>
                            <td> {{ $d->jadwal->jadwalpraktek ?? "jadwal kosong"}} </td>

                            </-------------------------------------------------------- edit
                                -----------------------------------------------------------------------------------* />
                            <td class="text-sm">
                                <a href="{{ route('dokter.edit', $d->id) }}" class="btn btn-warning" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit Dokter">
                                    <i class="fas fa-pen text-white"></i>
                                </a>

                                </-------------------------------------------------------- hapus
                                    -----------------------------------------------------------------------------------* />
                                <form action="{{ route('dokter.destroy', $d->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onClick="return confirm('Yakin ingin hapus data?')">
                                        <i class="fa fa-trash"></i></button>

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
                    lengthMenu: [
                        [10, 100, -1],
                        ['10', '100', 'All']
                    ],
                    buttons: [{
                            extend: 'excel',
                            text: 'Excel',
                            messageTop: 'Data Dokter di Cetak pada tanggal '+'{{  \Carbon\Carbon::now()->format("d-M(m)-Y") }}'
                        },
                        {
                            extend: 'copy',
                            text: 'Copy Isi',
                            messageTop: 'Data Dokter di Cetak pada tanggal '+'{{  \Carbon\Carbon::now()->format("d-M(m)-Y") }}'
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
