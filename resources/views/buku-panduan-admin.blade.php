<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Buku Panduan (ADMIN)</title>
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#diagnosa">Diagnosa</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#rekammedis">RekamMedis</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#jadwal">Jadwal Praktek Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--------------------------------------------------------Bagian Isi Konten Teratas----------------------------------------------------------------------------------->
    
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <h1>Buku Panduan (ADMIN)</h1>
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
        <img class="img-fluid" src="img/bukupanduan/masuk-dashboard.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 2 ======</h1>
        <h5 class="text-center">klik tombol "masuk sebagai staff"</h5>
        <img class="img-fluid" src="img/bukupanduan/masuk-dashboard2.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 3 ======</h1>
        <h5 class="text-center">masukkan email dan password yang didaftarkan oleh "superadmin" untuk masuk ke dashboard</h5>
        <img class="img-fluid" src="img/bukupanduan/masuk-dashboard3.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 4 ======</h1>
        <h5 class="text-center">setelah berhasil login berhasil, maka pilih "pendaftaran pasien"</h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-2admin.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 5 ======</h1>
        <h5 class="text-center">klik tombol "tambah pasien baru"</h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-3admin.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 6 ======</h1>
        <h5 class="text-center">Lengkapi form biodata pasien BARU</h5>
        <p class="text-center">jika selesai, maka data akan tampil diantrian</p>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-4admin.JPG" alt="..." />
    </div>
    </section>
    

<!--------------------------------------------------------Pendaftaran pasien lama----------------------------------------------------------------------------------->
<section class="page-section portfolio" id="pendaftaran-pasienlama">
    <div class="masthead bg-primary text-white text-center">
<h1>Pendaftaran dari sisi Pasien LAMA</h1>
</div>
<div class="container d-flex align-items-center flex-column">
    <h1>====== 1 ======</h1>
    <h5 class="text-center">pilih menu "pendaftaran"</h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-2admin.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 2 ======</h1>
        <h5 class="text-center">Masukkan nama lengkap dan tanggal lahir yang pernah didaftarkan sebelumnya, lalu klik tombol "cari pasien lama"</h5>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-3admin-lama.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 3 ======</h1>
        <h5 class="text-center">Jika tidak ditemukan maka, akan muncul</h5>
        <p class="text-center">seperti ini:</p>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-1admin-lama.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 4 ======</h1>
        <h5 class="text-center">Jika ditemukan maka, akan muncul</h5>
        <p class="text-center">seperti ini:</p>
        <img class="img-fluid" src="img/bukupanduan/pendaftaran-2admin-lama.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
        <h1>====== 5 ======</h1>
        <h5 class="text-center">Jika berhasil didaftarkan, maka kartu antrian tidak akan muncul, kecuali jika diisi dari halaman depan</h5>

</div>

<!--------------------------------------------------------diagnosa----------------------------------------------------------------------------------->

<section class="page-section portfolio" id="diagnosa">
    <div class="masthead bg-primary text-white text-center">
<h1>Tata cara Diagnosa</h1>
</div>
<div class="container d-flex align-items-center flex-column">
    <h1>====== 1 ======</h1>
    <h5 class="text-center">pilih menu "diagnosa/resep"</h5>
        <img class="img-fluid" src="img/bukupanduan/diagnosa-1.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 2 ======</h1>
    <h5 class="text-center">klik tombol / logo (hijau) "diagnosa"</h5>
        <img class="img-fluid" src="img/bukupanduan/diagnosa-2.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 3 ======</h1>
    <h5 class="text-center">lengkapi form yang sudah diperiksa oleh dokter</h5>
        <img class="img-fluid" src="img/bukupanduan/diagnosa-3.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 4 ======</h1>
    <h5 class="text-center">jika selesai maka, data diagnosa akan masuk ke "laporan harian" dan "rekam medis pasien"</h5>
        <img class="img-fluid" src="img/bukupanduan/diagnosa-4.JPG" alt="..." />
</div>

        <!--------------------------------------------------------rekammedis----------------------------------------------------------------------------------->

<section class="page-section portfolio" id="rekammedis">
    <div class="masthead bg-primary text-white text-center">
<h1>Lihat Rekam Medis Pasien</h1>
</div>
<div class="container d-flex align-items-center flex-column">
    <h1>====== 1 ======</h1>
    <h5 class="text-center">pilih menu "pasien"</h5>
        <img class="img-fluid" src="img/bukupanduan/rekammedis-1.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 2 ======</h1>
    <h5 class="text-center">klik tombol / logo (hijau) "buku" kode pasien</h5>
        <img class="img-fluid" src="img/bukupanduan/rekammedis-2.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 3 ======</h1>
    <h5 class="text-center">Tampilan per Rekam Medis Pasien serta riwayat pendaftarannya</h5>
        <img class="img-fluid" src="img/bukupanduan/rekammedis-3.JPG" alt="..." />
</div>

 <!--------------------------------------------------------jadwal praktek----------------------------------------------------------------------------------->

 <section class="page-section portfolio" id="jadwal">
    <div class="masthead bg-primary text-white text-center">
<h1>Tata Cara Mengelola Jadwal Praktek Dokter</h1>
</div>
<div class="container d-flex align-items-center flex-column">
    <h1>====== 1 ======</h1>
    <h5 class="text-center">pilih menu "dokter" dan pilih "jadwal praktek"</h5>
        <img class="img-fluid" src="img/bukupanduan/tambah-dokter1.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 2 ======</h1>
    <h5 class="text-center">Buat dan tambahkan Jadwal Praktek yang nantinya dipakai oleh dokter</h5>
        <img class="img-fluid" src="img/bukupanduan/tambah-dokter2-jadwal.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 3 ======</h1>
    <h5 class="text-center">Setelah membuat jadwal praktek, kembali ke menu "dokter" dan pilih "dokter"</h5>
        <img class="img-fluid" src="img/bukupanduan/tambah-dokter1.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 4 ======</h1>
    <h5 class="text-center">pilih dokter yang ingin diubah jadwal prakteknya dengan meng klik tombol / logo (kuning) "pulpen"</h5>
        <img class="img-fluid" src="img/bukupanduan/tambah-dokter2.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 5 ======</h1>
    <h5 class="text-center">Ubah Jadwal Praktek yang sudah dibuat sebelumnya</h5>
        <img class="img-fluid" src="img/bukupanduan/tambah-dokter3.JPG" alt="..." />
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h3>||</h3>
        <h2>V</h2>
    <h1>====== 6 ======</h1>
    <h5 class="text-center">"note"</h5>
    <p class="text-center">jika membuat jadwal praktek dengan kalimat "LIBUR" atau "CUTI" maka otomatis dihalaman depan jika pasien ingin memilih dokter tersebut, maka tidak bisa diklik</p>
</div>


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
