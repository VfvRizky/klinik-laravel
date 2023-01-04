<title>Akun Admin</title>
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
        <h1>Data Akun</h1>
        <br>

        <a href="/tambah-akun" type="button" class="btn btn-success">
            <i class="fas fa-plus text-white"></i> <i class="fas fa-user text-white"></i> Tambah Akun</a>

        </-------------------------------------------------------- Tabel
            -----------------------------------------------------------------------------------* />
        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        {{-- <th>Admin</th>
                        <th>Superadmin</th> --}}
                        <th>Tools</th>
                </thead>
                <tbody>
                    @foreach($user as $u)
                    <tr>
                        <td>{{ $count = $count + 1 }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        {{-- <td>{{ $u->is_admin == 1 ? 'Yes' : 'No' }}</td>
                        <td>{{ $u->is_superadmin == 1 ? 'Yes' : 'No' }}</td> --}}
                        <td>  
                            <a href="{{ route('user.edit', $u->id) }}" class="btn btn-warning" data-bs-toggle="tooltip"
                                data-bs-original-title="Edit Obat">
                                <i class="fas fa-pen text-white"></i>
                            </a>

                        </-------------------------------------------------------- hapus
                            -----------------------------------------------------------------------------------* />
                            <form action="{{ route('user.destroy', $u->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                onClick="return confirm('Yakin ingin hapus data?')"><i class="fas fa-trash"></i></button>

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
                        [10, 100, -1],
                        ['10', '100', 'All']
                    ],
                    
                    language: {
                        "searchPlaceholder": "Cari nama Akun",
                        "zeroRecords": "Tidak ditemukan data Akun yang sesuai",
                        "emptyTable": "Tidak terdapat data di tabel"
                    }
                });
            });
        </script>
    @endpush
@endsection
