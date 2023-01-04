
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<title>Rekam Medis : {{ $pasien->nama }}</title>

    @include('partials.navdashboard')
    {{-- {{ dd($dokter) }} --}}
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
        <h4>Rekam Medis Pasien atas nama:</h4>
        <h1>{{ $pasien->nama }}</h1>
        <br>

        </--------------------------------------------------------kodepasien-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kode Pasien</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Kodepasien" placeholder="Kodepasien"
                    required="required" value="{{ $pasien->kodepasien }}"readonly>
            </div>
        </div>
        </--------------------------------------------------------Alamat-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Alamat" placeholder="Alamat"
                    value="{{ $pasien->alamat }}"readonly>
            </div>
        </div>


        </--------------------------------------------------------Lahir-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lahir</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="Lahir"
                    value="{{ $pasien->lahir->format('Y-m-d') }}"readonly>

            </div>
        </div>

        </--------------------------------------------------------NIK-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK (Kartu Keluarga)</label>
            <div class="col-sm-5">
                <input type="text" class="form-control " id="nonik" name="NIK" placeholder="NIK"
                    value="{{ $pasien->nik }}"readonly>
            </div>
        </div>


        </--------------------------------------------------------Kelamin-----------------------------------------------------------------------------------* />

        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Kelamin" placeholder="kelamin..."
                    value="{{ $pasien->kelamin }}"readonly>
            </div>
        </div>
        <br>

        </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="notelp" name="Telepon"
                    placeholder="Nomer Telepon (aktif)" value="{{ $pasien->telepon }}"readonly>
            </div>
        </div>


        </--------------------------------------------------------Agama-----------------------------------------------------------------------------------* />

        <div class="form group row">
            <label class="col-form-label col-sm-2 pt-0">Agama</label>
            <div class="col-sm-3">

                <input type="text" class="form-control" name="Agama" placeholder="agama..."
                    value="{{ $pasien->agama }}"readonly>
            </div>
        </div>
        <br>




        </--------------------------------------------------------Pendidikan-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Pendidikan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Pendidikan" placeholder="pendidikan..."
                    value="{{ $pasien->pendidikan }}"readonly>
            </div>
        </div>

        </--------------------------------------------------------Pekerjaan-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Pekerjaan"
                    placeholder="Isi '-' jika belum/tidak bekerja " value="{{ $pasien->pekerjaan }}"readonly>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#daftarPasien">
                    Tambah Rekam
                </button>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editPasien">
                    Ubah data pasien
                </button>
                <a href="/pasien" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        {{-- </form> --}}
    </div>
    <div class="container">

        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Tanggal Periksa</th>
                        <th>Layanan</th>
                        <th>Keluhan</th>
                        <th>Dokter</th>
                        <th>Diagnosa</th>
                        <th>Obat</th>
                        <th>Jumlah Obat</th>
                        <th>Keterangan</th>
                        <th>Rawat</th>
                        <th>Golongan Darah</th>
                        <th>Tinggi</th>
                        <th>Berat</th>
                        <th>Lingkar Pinggang</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 0;
                    @endphp
                    @foreach ($rekam as $row)
                        <tr>
                            <td>{{ $count = $count + 1 }}</td>
                            <td>
                                @php
                                    if ($row->updated_at == '') {
                                        echo 'Belum ada pemriksaan';
                                    } else {
                                        echo date_format($row->updated_at, 'd/m/Y');
                                    }
                                @endphp
                            </td>
                            <td> {{ $row->layanan ?? "-"}} </td>
                            <td> {{ $row->keluhan ?? "-"}} </td>
                            <td> {{ $row->dokter->nama ?? "Dokter belum diinput"}} </td>
                            <td>
                                @php
                                    if ($row->diagnosa == '') {
                                        echo 'Belum ada diagnosa';
                                    } else {
                                        echo $row->diagnosa;
                                    }
                                @endphp
                            </td>
                            <td>
                                @php
                                    if ($row->obat == '') {
                                        echo 'Belum ada obat';
                                    } else {
                                        echo $row->obat->nama;
                                    }
                                @endphp
                            </td>
                            <td>
                                @php
                                    if ($row->jumlahobat == '') {
                                        echo '-';
                                    } else {
                                        echo $row->jumlahobat;
                                    }
                                @endphp
                            </td>
                            <td>
                                @php
                                    if ($row->keterangan == '') {
                                        echo '-';
                                    } else {
                                        echo $row->keterangan;
                                    }
                                @endphp
                            </td>
                            <td>{{ $row->rawat ?? "-" }}</td>
                            <td>{{ $row->darah ?? "-" }}</td>
                            <td>{{ $row->tinggi ?? "-" }} Cm</td>
                            <td>{{ $row->berat ?? "-" }} Kg</td>
                            <td>{{ $row->pinggang ?? "-" }} Cm</td>


                            </-------------------------------------------------------- edit
                                -----------------------------------------------------------------------------------* />
                            <td class="text-sm">
                                <a href="editrekam/{{ $row->id }}" class="btn btn-warning"
                                    data-bs-toggle="tooltip" data-bs-original-title="Edit Pasien">
                                    <i class="fas fa-pen text-white"></i>
                                </a>

                                </-------------------------------------------------------- hapus
                                    -----------------------------------------------------------------------------------* />
                                <form action="{{ route('rekam.destroy', $row->id) }}" method="POST">
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


    <!-- Daftar Pasien Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="daftarPasien" tabindex="-1" aria-labelledby="daftarPasienLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                        Tambah Data Diagnosa ({{ $pasien->nama }}, {{ $pasien->lahir->age }} Tahun)
                    </h5>
                    
                    
                </div>
                <form action="/rekam-store" method="post">
                    @csrf
                    <input type="hidden" value="{{ $pasien->id }}" name="idpasien">
                    <div class="modal-body relative p-4">
                        <!--------------------------------------------------------pilih layanan----------------------------------------------------------------------------------- -->
                        <div class="form-group row mt-2">
                            <label class="col-form-label col-sm-2 pt-0">Layanan</label>
                            <div class="col-sm">
                                <select name="layanan" class="form-control "
                                required oninvalid="this.setCustomValidity('Pilih Layanan...')"
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
                                    placeholder="isi keluhan pasien, dan sudah berapa lama?"
                                    required oninvalid="this.setCustomValidity('Isi keluhan si pasien')"
                                    oninput="setCustomValidity('')"></textarea>
                            </div>
                        </div>

                        <!--------------------------------------------------------pilih dokter----------------------------------------------------------------------------------- -->
                        <div class="form-group row mt-2">
                            <label class="col-form-label col-sm-2 pt-0">Dokter</label>
                            <div class="col-sm">
                                <select name="dokter" class="form-control "
                                required oninvalid="this.setCustomValidity('Pilih Dokter yang memeriksa')"
                                    oninput="setCustomValidity('')">
                                    <option value="">pilih dokter...</option>
                                    @foreach ($dokter as $row)
                                        <option value="{{ $row->id }}">
                                            {{ $row->nama .' |'}} {{ $row->jadwal == '' ? 'Belum ada Jadwal' : $row->jadwal->jadwalpraktek }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!--------------------------------------------------------DIAGNOSA----------------------------------------------------------------------------------- -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Diagnosa</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="diagnosa" placeholder="Diagnosa.."
                                     value="{{ old('diagnosa') }}"
                                    required oninvalid="this.setCustomValidity('Diagnosa tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <!--------------------------------------------------------Obat----------------------------------------------------------------------------------- -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Obat</label>
                            <div class="col-sm-5">
                                <select name="obat" id="" class="form-control"
                                required oninvalid="this.setCustomValidity('Pilih Obatnya dahulu..')"
                                    oninput="setCustomValidity('')" >
                                    <option value="">Pilih obat yang diberikan..</option>
                                    @foreach ($obat as $o)
                                        <option value="{{ $o->id }}">
                                            {{ $o->nama . ' (Sisa stok: ' . $o->stok . ')' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--------------------------------------------------------banyaknya Obat----------------------------------------------------------------------------------- -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah Obat</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="jumlahobat"
                                    placeholder="Jumlah obat"  value="{{ old('Nama') }}"
                                    required oninvalid="this.setCustomValidity('isi 0 jika tidak diberikan obat')"
                                    oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <!--------------------------------------------------------keterangan----------------------------------------------------------------------------------- -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="keterangan"
                                    placeholder="Keterangan.." value="{{ old('keterangan') }}"
                                    required oninvalid="this.setCustomValidity('Isi - Jika kosong')"
                                    oninput="setCustomValidity('')">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Ubah Pasien Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="editPasien" tabindex="-1" aria-labelledby="daftarPasienLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h3 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                        Perubahan data Pasien
                    </h3>
                    
                </div>
                <form action="/update-pasien" method="post">
                    @csrf
                    <input type="hidden" value="{{ $pasien->id }}" name="idpasien">
                    <div class="modal-body relative p-4">
                        </--------------------------------------------------------kodepasien-----------------------------------------------------------------------------------* />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kode Pasien</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="Kodepasien"
                                    placeholder="Kodepasien" required="required" value="{{ $pasien->kodepasien }}">
                            </div>
                        </div>

                        </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="Nama" placeholder="Nama"
                                    value="{{ $pasien->nama }}">
                            </div>
                        </div>

                        </--------------------------------------------------------Alamat-----------------------------------------------------------------------------------* />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="Alamat" placeholder="Alamat"
                                    value="{{ $pasien->alamat }}">
                            </div>
                        </div>


                        </--------------------------------------------------------Lahir-----------------------------------------------------------------------------------* />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Lahir</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" name="Lahir"
                                    value="{{ $pasien->lahir->format('Y-m-d') }}">

                            </div>
                        </div>

                        </--------------------------------------------------------NIK-----------------------------------------------------------------------------------* />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIK (Kartu Keluarga)</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control " id="nonik" name="NIK"
                                    placeholder="NIK" value="{{ $pasien->nik }}">
                            </div>
                        </div>


                        </--------------------------------------------------------Kelamin-----------------------------------------------------------------------------------* />

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                            <div class="col-sm-5">
                                <select name="Kelamin" class="form-control " required
                                    oninvalid="this.setCustomValidity('jenis kelamin tidak boleh kosong')"
                                    oninput="setCustomValidity('')">

                                    <option selected value="">pilih...</option>
                                    <option value="laki-laki" {{ $pasien->kelamin == 'laki-laki' ? 'selected' : '' }} >Laki-laki</option>
                                    <option value="perempuan"{{ $pasien->kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------* />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="notelp" name="Telepon"
                                    placeholder="Nomer Telepon (aktif)" value="{{ $pasien->telepon }}">
                            </div>
                        </div>


                        </--------------------------------------------------------Agama-----------------------------------------------------------------------------------* />

                        <div class="form group row">
                            <label class="col-form-label col-sm-2 pt-0">Agama</label>
                            <div class="col-sm-3">
                                <select name="Agama" class="form-control" required
                                oninvalid="this.setCustomValidity('agama tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                                <option selected value="">Pilih agama..</option>
                                <option value="islam" {{ $pasien->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                                <option value="protestan" {{ $pasien->agama == 'protestan' ? 'selected' : '' }}>Kristen
                                    Protestan
                                </option>
                                <option value="katolik" {{ $pasien->agama == 'katolik' ? 'selected' : '' }}>Kristen Katolik
                                </option>
                                <option value="hindu" {{ $pasien->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="buddha" {{ $pasien->agama == 'buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="konghucu" {{ $pasien->agama == 'konghucu' ? 'selected' : '' }}>Konghucu
                                </option>
                            </select>
                            </div>
                        </div>
                        <br>




                        </--------------------------------------------------------Pendidikan-----------------------------------------------------------------------------------* />
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 pt-0">Pendidikan</label>
                            <div class="col-sm-5">
                                <select name="Pendidikan" class="form-control ">
                                    <option value="-">-</option>
                                    <option value="sltp/sd-smp" {{ $pasien->pendidikan == 'sltp/sd-smp' ? 'selected' : '' }}>SLTP / SD-SMP</option>
                                    <option value="slta/sma" {{ $pasien->pendidikan == 'slta/sma' ? 'selected' : '' }}>SLTA / SMA</option>
                                    <option value="sarjana" {{ $pasien->pendidikan == 'sarjana' ? 'selected' : '' }}>Sarjana</option>
                                </select>
                            </div>
                        </div>

                        </--------------------------------------------------------Pekerjaan-----------------------------------------------------------------------------------* />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="Pekerjaan"
                                    placeholder="Isi '-' jika belum/tidak bekerja " value="{{ $pasien->pekerjaan }}">
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function setInputFilter(textbox, inputFilter, errMsg) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(
                function(event) {
                    textbox.addEventListener(event, function(e) {
                        if (inputFilter(this.value)) {
                            // Accepted value
                            if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
                                this.classList.remove("input-error");
                                this.setCustomValidity("");
                            }
                            this.oldValue = this.value;
                            this.oldSelectionStart = this.selectionStart;
                            this.oldSelectionEnd = this.selectionEnd;
                        } else if (this.hasOwnProperty("oldValue")) {
                            // Rejected value - restore the previous one
                            this.classList.add("input-error");
                            this.setCustomValidity(errMsg);
                            this.reportValidity();
                            this.value = this.oldValue;
                            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                        } else {
                            // Rejected value - nothing to restore
                            this.value = "";
                        }
                    });
                });
        }

        setInputFilter(document.getElementById("nonik"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
        setInputFilter(document.getElementById("notelp"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
    </script>

</body>

</html>
