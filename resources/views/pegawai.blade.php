<title>Pegawai Klinik</title>
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
        <h1>Data Pegawai</h1>
        <br>

        </-------------------------------------------------------- Tabel
            -----------------------------------------------------------------------------------* />
        <a href="/pegawai/create" type="button" class="btn btn-success">
            <i class="fas fa-plus text-white"></i>Tambah Pegawai</a>
        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Pegawai</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomer Telepon</th>
                        <th>Agama</th>
                        <th>Jabatan</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($datapegawai as $pg)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $pg->kodepegawai }} </td>
                            <td> {{ $pg->nama }} </td>
                            <td> {{ $pg->alamat }} </td>
                            <td> {{ $pg->kelamin }} </td>
                            <td> 
                                <a href="https://api.whatsapp.com/send?phone=<?php echo $pg['telepon']; ?>"
                                     target=" _blank" title="Pesan WhatsApp" class="btn btn-success">
                                        <b>{{ $pg->telepon }}</b>
                                    </a>

                                 </td>
                            <td> {{ $pg->agama }} </td>
                            <td> {{ $pg->jabatan }} </td>

                            </-------------------------------------------------------- edit
                                -----------------------------------------------------------------------------------* />
                            <td class="text-sm">
                                <a href="{{ route('pegawai.edit', $pg->id) }}" class="btn btn-warning">
                                    <i class="fas fa-pen text-white"></i>
                                </a>
                                </-------------------------------------------------------- hapus
                                    -----------------------------------------------------------------------------------* />
                                <form action="{{ route('pegawai.destroy', $pg->id) }}" method="POST">
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
                dom: 'lBfrtip',
                lengthMenu: [
                    [25, 100, -1],
                    ['25', '100', 'All']
                ],
                buttons: [{
                        extend: 'excel',
                        text: 'Excel',
                        messageTop: 'Data Pegawai Dicetak pada Tanggal '+'{{  \Carbon\Carbon::now()->format("d-M(m)-Y") }}'
                    },
                    {
                        extend: 'copy',
                        text: 'Copy Isi',
                        messageTop: 'Data Pegawai di Copy pada Tanggal '+'{{  \Carbon\Carbon::now()->format("d-M(m)-Y") }}'                 
                    },
                ],
                language: {
                    "searchPlaceholder": "Cari nama Pegawai",
                    "zeroRecords": "Tidak ditemukan data yang sesuai",
                    "emptyTable": "Tidak terdapat data di tabel"
                }
            });
        });
    </script>
    @endpush
@endsection
