<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Buku Panduan</title>
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
            <a class="navbar-brand" href="/#page-top"><img src="{{ asset('img/logo.png') }}" style=”float:left;
                    width="55";height="55"” />KLINIK {{ env('APP_NAME') }}</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <!--------------------------------------------------------Jam Navbar----------------------------------------------------------------------------------->


            <!--------------------------------------------------------NAVBAR----------------------------------------------------------------------------------->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#pendaftaran-pasien">Pendaftaran-baru</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#pendaftaran-pasienlama">Pendaftaran-lama</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--------------------------------------------------------Bagian Isi Konten Teratas----------------------------------------------------------------------------------->
    
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <h1>Buku Panduan</h1>
            <h3>Tata cara penggunaan aplikasi web</h3>
            <h5>klinikmajusejahtera.com</h5>
           

        </div>
    </header>
    
    <!--------------------------------------------------------Pendaftaran pasien baru----------------------------------------------------------------------------------->
    <section class="page-section portfolio" id="pendaftaran-pasien">
            <div class="container d-flex align-items-center flex-column">
        <h1>Pendaftaran dari sisi Pasien BARU</h1>
        <h1>====== 1 ======</h1>
        <h5 class="text-center">klik tombol "pendaftaran" atau scroll kehalaman bawah</h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-1.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 2 ======</h1>
        <h5 class="text-center">klik tombol "daftar sebagai pasien"</h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-2.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 3 ======</h1>
        <h5 class="text-center">pilih pasien baru, jika pasien belum pernah berobat sebelumnya</h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-3.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 4 ======</h1>
        <h5 class="text-center">Pasien, mengisi form biodata</h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-4.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 5 ======</h1>
        <h5 class="text-center">Jika berhasil maka pasien akan mendapatkan kartu antrian yang bisa didownload untuk ditunjukkan ke petugas klinik</h5>
        <p class="text-center">seperti ini contoh kartunya:</p>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-5.JPG" alt="..." />
    </div>
    </section>
    

<!--------------------------------------------------------Pendaftaran pasien lama----------------------------------------------------------------------------------->
<section class="page-section portfolio" id="pendaftaran-pasienlama">
    <div class="masthead bg-primary text-white text-center">
<h1>Pendaftaran dari sisi Pasien LAMA</h1>
</div>
<div class="container d-flex align-items-center flex-column">
    <h1>====== 1 ======</h1>
    <h5 class="text-center">Masukkan Nama Lengkap dan tanggal lahir yang sebelumnya pernah didaftarkan, lalu klik tombol "cari" </h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-1lama.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 2 ======</h1>
        <h5 class="text-center">Jika tidak pernah mendaftar sebelumnya maka, akan muncul</h5>
        <p class="text-center">seperti ini:</p>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-2lama.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 3 ======</h1>
        <h5 class="text-center">Jika ditemukan maka, akan muncul</h5>
        <p class="text-center">seperti ini:</p>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-3lama.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 4 ======</h1>
        <h5 class="text-center">Jika Selesai maka pasien akan mendapatkan kartu antrian yang bisa didownload untuk ditunjukkan ke petugas klinik</h5>
        <p class="text-center">seperti ini contoh kartunya:</p>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-5.JPG" alt="..." />

</div>

<br>
<br>
<br>


    <!--------------------------------------------------------Footer----------------------------------------------------------------------------------->

    <!--------------------------------------------------------copyright----------------------------------------------------------------------------------->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Klinik {{ env('APP_NAME') }} 2022</small></div>
    </div>
    @push('scripts')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        
    </body>
