<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-hospital"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KLINIK {{ env("APP_NAME") }} </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-cog"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Umum
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-pen"></i>
            <span>Pendaftaran</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar Harian</h6>
                <a class="collapse-item fas fa-pen" href="/pendaftaran"> Pendaftaran Pasien</a>
                <a class="collapse-item fas fa-users" href="/antrian-pasien-admin"> Antrian Pasien</a>
                <a class="collapse-item fas fa-stethoscope" href="/diagnosa"> diagnosa/resep</a>
                <a class="collapse-item fas fa-folder-open" href="/laporan-harian"> Laporan Harian</a>

            </div>
        </div>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/pasien">
            <i class="fas fa-fw fa-book">

            </i>
            <span>Pasien</span>
        </a>
    </li>



  
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-user-md"></i>
            <span>Dokter</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Dokter</h6>
                <a class="collapse-item fa fa-user-md" href="/dokter"> Dokter</a>
                <a class="collapse-item fa fa-clock" href="/jadwal"> Jadwal Praktek</a>
                <a class="collapse-item fa fa-heartbeat" href="/poli-form"> Poli/Spesialis</a>
            </div>
        </div>
    </li>
    

    <li class="nav-item">
        <a class="nav-link" href="/pegawai">
            <i class="fa fa-id-card"></i>
            <span>Pegawai</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-flask"></i>
            <span>Farmasi</span>
        </a>
        <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Obat-obatan</h6>
                <a class="collapse-item fa fa-archive" href="/obat-total-stok"> Stok Obat</a>
                <a class="collapse-item fa fa-flask" href="/obat-jenis"> Jenis Obat</a>
            </div>
        </div>
    </li>

    @if(auth()->check() && auth()->user()->is_superadmin === 1)
        <li class="nav-item">
            <a class="nav-link" href="/akun">
                <i class="fas fa-fw fa-user"></i>
                <span>Akun</span></a>
        </li>
    @endif

    {{-- <li class="nav-item">
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger m-3"  onClick="return confirm('Yakin ingin hapus data?')">Logout</button>
        </form>
    </li> --}}

    <li class="nav-item">
        <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="img/logo.png" alt="...">
            <p class="text-center mb-2"><strong></strong>Klinik {{ env("APP_NAME") }}</p>
            <a class="btn btn-success btn-sm" href="/">Ke Beranda</a>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </li>

    <div class="sidebar-heading">
        Powered by &copy; KLINIK {{ env("APP_NAME") }} <br>2022
    </div>

</ul>
