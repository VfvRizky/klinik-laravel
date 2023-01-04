<title>Farmasi</title>
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
        <h1>Farmasi</h1>
        <br>

        <a href="/obat-form" type="button" class="btn btn-success"><i class="fas fa-plus text-white"></i> 
            <i class="fas fa-medkit text-white"></i>  Tambah Obat</a>

        </-------------------------------------------------------- Tabel
            -----------------------------------------------------------------------------------* />
        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Tools</th>
                        <th>Kode Obat</th>
                        <th>Stok</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Status</th>
                        <th>Dosis</th>
                        <th>Harga</th>
                        <th>Tanggal Buat</th>
                        <th>Tanggal Expired</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obat as $p)
                        <tr>
                            <td> 1 </td>
                            </-------------------------------------------------------- edit
                                -----------------------------------------------------------------------------------* />
                            <td class="text-sm">
                                <a href="{{ route('obat.edit', $p->id) }}" class="btn btn-warning" data-bs-toggle="tooltip">
                                    <i class="fas fa-pen text-white"></i>
                                </a>

                                <a href="/edit-stok/{{ $p->id }}" class="btn btn-primary" data-bs-toggle="tooltip">
                                    <i class="fas fa-cube text-white"></i>
                                </a>

                                </-------------------------------------------------------- hapus
                                    -----------------------------------------------------------------------------------* />
                                <form action="{{ route('obat.destroy', $p->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onClick="return confirm('Yakin ingin hapus Obat ini?')"><i class="fa fa-trash"></i></button>

                                </form>
                            </td>
                            <td> {{ $p->kodeobat =='' ? 'Kode Belum data' : $p->kodeobat }}</td>
                            <td> {{ $p->stok =='' ? 'Stok Kosong' : $p->stok }}</td>
                            <td> {{ $p->nama }}</td>
                            <td>{{ $p->jenis=='' ? 'Jenis Belum ada' :  $p->jenis->jenisobat }}</td>
                            <td>
                                @php
                                    $expired = date('Y/m/d', strtotime($p->expired));
                                    $today = date('Y/m/d');
                                
                                    if ($today < $expired) {
                                        echo "<font color=green>Bagus</font>";
                                    } else {
                                        echo "<font color=red>Expired</font>";
                                    }
                                @endphp
                            </td>
                            <td> {{ $p->dosis=='' ? 'Dosis Belum ada' : $p->dosis }}</td>
                            <td> {{ "Rp " . number_format($p->harga,2,',','.'); }}</td>
                            <td> {{ $p->created_at->format('d/m/Y   H:i:s'); }}</td>
                            <td> {{ date("d/m/Y", strtotime($p->expired=='' ? 'Expired belum di Set' : $p->expired)); }}</td>
                            <td> 
                                @if($p->photo=='')
                                    {{ 'Gambar Belum ada' }}
                                @else
                                    <img src="/image/{{ $p->photo }}" alt="" width="100%">
                                @endif
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
                        [50, 100, 1000, -1],
                        ['50', '100', '1000', 'All']
                    ],
                    buttons: [{
                            extend: 'excel',
                            text: 'Excel',
                            messageTop: 'Data Obat dicetak per Tanggal '+'{{  \Carbon\Carbon::now()->format("d-M(m)-Y") }}'
                            
                        },
                        {
                            extend: 'copy',
                            text: 'Copy Isi',
                            messageTop: 'Data Obat dicetak per Tanggal '+'{{  \Carbon\Carbon::now()->format("d-M(m)-Y") }}'
                            
                        },
                    ],
                    language: {
                        "searchPlaceholder": "Cari nama obat",
                        "zeroRecords": "Tidak ditemukan data yang sesuai",
                        "emptyTable": "Tidak terdapat data di tabel"
                    }
                });
            });
        </script>
    @endpush
@endsection
