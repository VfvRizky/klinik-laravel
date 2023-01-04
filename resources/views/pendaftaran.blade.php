<title>Daftarkan Pasien</title>
@extends('layouts.main')
@section('content')

    <div class="container">
        <h1>Daftar Harian Pasien</h1>
        <br>

        @if (session()->has('failed'))
            <div class="alert alert-danger mb-3" role="alert">
                {{ session('failed') }}
            </div>
        @elseif (session()->has('addsuccess'))
            <div class="alert alert-success" role="alert">
                {{ session('addsuccess') }}
            </div>
        @endif
        

        <a href="/tambahpasienadmin" type="button" class="btn btn-success">
            <i class="fas fa-plus text-white"></i> <i class="fas fa-address-book text-white"></i>  Tambah Pasien Baru</a></a>

<section class="mt-4">
        <h4>Pasien Lama</h4>
        <form action="/cekpasienlamaadmin" method="POST">
            @csrf
            <!--------------------------------------------------------Nama----------------------------------------------------------------------------------->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama Lengkap" required="required"
                        oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
            </--------------------------------------------------------Lahir-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Lahir</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control @error('Lahir') is-invalid @enderror" name="Lahir"
                        placeholder="Lahir">
                    @error('Lahir')
                        <div class="invalid-feedback">
                            "tanggal lahir masih kosong
                        </div>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-warning col-sm-2">
                <i class="fas fa-search text-white"></i>  Cari Pasien Lama</button>
            </div>
        </form>
    </section>


    <div class="modal fade" id="pasienlamas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="pasienlamas">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <img src="{{ asset('img/logo.png') }}" style=”float:left;
                                width="55";height="55"” />Klinik Maju Sejahtera
                        </h5>

                    </div>
                    <div class="modal-body">
                        <p class="h3">Data Pasien Ditemukan</p>
                        <p>Nama : <span class="text-primary">{{ Session::get('nama') }}</span>
                        </p>
                        <p>Alamat : <span class="text-primary">{{ Session::get('alamat') }}</span>
                        </p>
                        <p>Tanggal Lahir : <span class="text-primary">{{ Session::get('lahir') }}</span>
                        </p>
                        <p>Kelamin : <span class="text-primary">{{ Session::get('kelamin') }}</span>
                        </p>

                        <form action="addrekamadmin" method="POST">
                            @csrf
                            <div class="form-group row mt-2">
                                <input type="text" value="{{ Session::get('id') }}" name="id_player" readonly
                                    hidden>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-form-label col-sm-2 pt-0">Layanan</label>
                                <div class="col-sm">
                                    <select name="layanan" class="form-control " required oninvalid="this.setCustomValidity('pilihkan layanan yang digunakan pasien...')"
                                    oninput="setCustomValidity('')">
                                        <option value="">pilih layanan...</option>
                                        <option value="Umum">Umum</option>
                                        <option value="Asuransi">Asuransi</option>
                                    </select>
                                </div>
                            </div>
                            <!--------------------------------------------------------rekam medis----------------------------------------------------------------------------------- -->
                            <div class="form-group row mt-2">
                                <label class="col-sm-2 col-form-label">Keluhan</label>
                                <div class="col-sm">
                                    <textarea type="text" name="keluhan" class="form-control" cols="30" rows="5"
                                        placeholder="Isi keluhan pasien, dan sudah berapa lama?"required oninvalid="this.setCustomValidity('isi keluhan pasien...')"
                                        oninput="setCustomValidity('')"></textarea>
                                </div>
                            </div>

                            <!--------------------------------------------------------pilih dokter----------------------------------------------------------------------------------- -->
                            <div class="form-group row mt-2">
                                <label class="col-form-label col-sm-2 pt-0">Dokter</label>
                                <div class="col-sm">
                                    <select name="doktor" class="form-control " required oninvalid="this.setCustomValidity('pilihkan dokter yang memeriksa...')"
                                    oninput="setCustomValidity('')">
                                        <option value="">pilih dokter...</option>
                                        @foreach($dokter as $row)
                                        <option value= "{{ $row->id }}">{{ $row->nama }}({{ $row->poli == '' ? '-' : $row->poli->name }})  | {{ $row->jadwal == '' ? 'Belum ada Jadwal' : $row->jadwal->jadwalpraktek }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Daftarkan</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    </div>
    @push('scripts')
        <script>

            @if (Session::has('success'))
            $(document).ready(function() {
                $('#pasienlamas').modal('show')
            });
            @endif
        </script>
    @endpush
@endsection
