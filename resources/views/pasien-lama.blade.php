<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Klinik {{ env('APP_NAME') }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"
        integrity="sha512-tVYBzEItJit9HXaWTPo8vveXlkK62LbA+wez9IgzjTmFNLMBO1BEYladBw2wnM3YURZSMUyhayPCoLtjGh84NQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles-index.css" rel="stylesheet" />
    <link href="{{ asset('img/icon.ico') }}" rel="SHORTCUT ICON" />
</head>

<body id="page-top" onload="initClock()">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('img/logo.png') }}" style=”float:left;
                    width="55";height="55"” />KLINIK</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <!--------------------------------------------------------Jam Navbar----------------------------------------------------------------------------------->
            <a href="#" class="nav-link disabled">
                <!--digital clock start-->
                <div class="datetime">
                    <div class="date">
                        <span id="dayname">Day</span>,
                        <span id="month">Month</span>
                        <span id="daynum">00</span>,
                        <span id="year">Year</span>
                    </div>
                    <div class="time">
                        <span id="hour">00</span>:
                        <span id="minutes">00</span>:
                        <span id="seconds">00</span>
                        <span id="period">AM</span>
                    </div>
                </div>
                <!--digital clock end-->
            </a>

            <!--------------------------------------------------------NAVBAR----------------------------------------------------------------------------------->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/#portfolio">Tentang
                            kami</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/#about">Pendaftaran</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/#contact">Alamat</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--------------------------------------------------------Bagian Isi Konten Teratas----------------------------------------------------------------------------------->
    <header class="masthead bg-primary text-white text-center">

        <h1>Pasien Lama</h1>
        <h4>atau</h4>
        <h4>yang sudah pernah berobat sebelumnya</h4>

        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <a href="antrian-pasien" type="button" class="btn btn-warning">Cek Antrian</a>
            <div class="divider-custom-line"></div>
        </div>
    </header>
    <!--------------------------------------------------------Bagian Isi Konten----------------------------------------------------------------------------------->
    <section class="page-section portfolio" id="lama">
        <div class="container">

            <form action="/cekpasienlama" method="POST">
                @csrf
                <!--------------------------------------------------------Nama----------------------------------------------------------------------------------->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="Nama" placeholder="Nama Lengkap"
                            required="required" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                            oninput="setCustomValidity('')">
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
                    <i class="fas fa-search"></i> Cari</button>
        </div>
        </form>
    </section>

    

    <div class="modal fade" id="pasienlamaf" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div id="kartuantrian">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <img src="{{ asset('img/logo.png') }}" style=”float:left;
                                width="55";height="55"” />Klinik {{ env('APP_NAME') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="h3">Data Pasien</p>
                        <p class="h3" style="color:RED;">Tidak Ditemukan</p>
                        <p class="p" style="color:rgb(129, 129, 129); font-style: italic;">"coba ingat
                            kembali,
                            apakah anda sudah pernah berobat diklinik {{ env('APP_NAME') }} sebelumnya"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------Footer----------------------------------------------------------------------------------->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Lokasi</h4>
                    <p class="lead mb-0">
                        Jl. Moh. Hatta Handil 7
                        <br />
                        Kecamatan MuaraJawa, Kutai Kartanegara
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Media Social</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Tentang Klinik</h4>
                    <p class="lead mb-0">
                        Klinik {{ env('APP_NAME') }} dibangun sejak tahun 2002 yang berada di kecamatan MuaraJawa, Handil Kutai Kartanegara
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--------------------------------------------------------copyright----------------------------------------------------------------------------------->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Powered by &copy; Klinik {{ env('APP_NAME') }} 2022</small></div>
    </div>


    
    <!--------------------------------------------------------modal kartu antrian----------------------------------------------------------------------------------->
    <div class="modal fade" id="antrian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="kartuantrian2">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <img src="{{ asset('img/logo.png') }}" style=”float:left;
                                width="55";height="55"” />Klinik {{ env('APP_NAME') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="h3">Nomor Antrian : <span
                                class="text-primary">{{ Session::has('nomorAntrian') ? Session::get('nomorAntrian') : '' }}</span>
                        </p>
                        <p class="h3">Atas Nama : <span
                                class="text-primary">{{ Session::has('nama') ? Session::get('nama') : '' }}</span>
                        </p>
                        <p>Daftar pada jam : <span
                                class="text-primary">{{ Session::has('timestamps') ? Session::get('timestamps') : '' }}</span>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <p>Tanggal : <span
                                class="text-primary">{{ Session::has('tanggaldaftar') ? Session::get('tanggaldaftar') : '' }}</span>
                        </p>

                        <a type="button" class="btn btn-secondary" href="/antrian-pasien">
                            <i class="fas fa-users me-2"></i>
                            Cek Antrian
                        </a>
                        <button type="button" class="btn btn-primary" id="download">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------modal kartu pasien----------------------------------------------------------------------------------->

    
        <div class="modal fade" id="pasienlamas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="antrianLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">
                                <img src="{{ asset('img/logo.png') }}" style=”float:left;
                                    width="55";height="55"” />Klinik {{ env('APP_NAME') }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
    
                            <form action="addrekam" method="POST">
                                @csrf
                                <div class="form-group row mt-2">
                                    <input type="text" value="{{ Session::get('id') }}" name="id_player" readonly
                                        hidden>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-form-label col-sm-2 pt-0">Layanan</label>
                                    <div class="col-sm">
                                        <select name="layanan" class="form-control " required
                                            oninvalid="this.setCustomValidity('Pribadi / Asuransi?')"
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
                                            placeholder="Jelaskan keluhan anda, dan sudah berapa lama?" required
                                            oninvalid="this.setCustomValidity('jelaskan keluhan anda...')" oninput="setCustomValidity('')"></textarea>
                                    </div>
                                </div>
    
                                <!--------------------------------------------------------pilih dokter----------------------------------------------------------------------------------- -->
                                <div class="form-group row mt-2">
                                    <label class="col-form-label col-sm-2 pt-0">Dokter</label>
                                    <div class="col-sm">
                                        <select name="dokter" class="form-control " required
                                            oninvalid="this.setCustomValidity('pilih dokter yang tersedia...')"
                                            oninput="setCustomValidity('')">
                                            <option value="">pilih dokter...</option>
                                            @foreach ($dokter as $row)
                                                <option {{ $row->jadwal->jadwalpraktek == 'LIBUR' ? 'disabled' : ''}} {{ $row->jadwal->jadwalpraktek == 'CUTI' ? 'disabled' : ''}} value="{{ $row->id }}">
                                                    {{ $row->nama }}({{ $row->poli == '' ? '-' : $row->poli->name }}) |
                                                    {{ $row->jadwal == '' ? 'Belum ada Jadwal' : $row->jadwal->jadwalpraktek }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
    
                                <div class="mt-2 d-flex justify-content-center">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" >Daftar</button>
                                </div>
    
                            </form>
    
                        
                    </div>
                </div>
            </div>
        
    <!--------------------------------------------------------modal error----------------------------------------------------------------------------------->
    <div class="modal fade" id="error" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div id="kartuantrian">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <img src="{{ asset('img/logo.png') }}" style=”float:left;
                                width="55";height="55"” />Klinik {{ env('APP_NAME') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @foreach ($errors->all() as $item)
                            <div class="alert alert-danger" role="alert">
                                {{ $item }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--------------------------------------------------------Bootstrap JS----------------------------------------------------------------------------------->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!--------------------------------------------------------modal antrian----------------------------------------------------------------------------------->
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#error').modal('show')
            });
        </script>
    @endif

    <script>
        @if (Session::has('success'))
            $(document).ready(function() {
                $('#pasienlamas').modal('show')
            });
        @elseif (Session::has('failed'))
            $(document).ready(function() {
                $('#pasienlamaf').modal('show')
            });
        @elseif (Session::has('addsuccess'))
            $(document).ready(function() {
                $('#antrian').modal('show')
            });
        @endif
    </script>

    <!--------------------------------------------------------modal antrian----------------------------------------------------------------------------------->
    <script>
        @if (Session::has('nomorAntrian'))
            $(document).ready(function() {
                $('#antrian').modal('show')
            });
        @endif
    </script>
    <!--------------------------------------------------------fungsi inputan angka/number only----------------------------------------------------------------------------------->
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

    <!--------------------------------------------------------fungsi jam----------------------------------------------------------------------------------->
    <script type="text/javascript">
        function updateClock() {
            var now = new Date();
            var dname = now.getDay(),
                mo = now.getMonth(),
                dnum = now.getDate(),
                yr = now.getFullYear(),
                hou = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pe = "AM";

            if (hou >= 12) {
                pe = "PM";
            }
            if (hou == 0) {
                hou = 12;
            }
            if (hou > 12) {
                hou = hou - 12;
            }

            Number.prototype.pad = function(digits) {
                for (var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }

            var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
            var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
            var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
            for (var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }

        function initClock() {
            updateClock();
            window.setInterval("updateClock()", 1);
        }
    </script>

    <!--------------------------------------------------------fungsi download kartu antrian----------------------------------------------------------------------------------->
    <script>
        document.getElementById("download").addEventListener("click", function() {
            const imgName = prompt("Input nama gambar yang akan diunduh: ")
            html2canvas(document.querySelector('#kartuantrian2')).then(function(canvas) {

                console.log(canvas);
                saveAs(canvas.toDataURL(), imgName + '.jpg');
            });
        });

        function saveAs(uri, filename) {
            var link = document.createElement('a');
            if (typeof link.download === 'string') {
                link.href = uri;
                link.download = filename;
                //Firefox requires the link to be in the body
                document.body.appendChild(link);
                //simulate click
                link.click();
                //remove the link when done
                document.body.removeChild(link);
            } else {
                window.open(uri);
            }
        }
    </script>
</body>

</html>