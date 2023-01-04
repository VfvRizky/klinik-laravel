<!DOCTYPE html>
<html lang="en">
    <link href="{{ asset ('img/icon.ico') }}" rel="SHORTCUT ICON" />
<head>
    @include('partials.head')
</head>

<body id="page-top" onload="initClock()">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
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
        
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    {{-- <button class="btn btn-danger m-3" onClick="return confirm('Yakin ingin logout?')">Logout</button> --}}
                </form>
            </li>

            <li class="nav-item">
                <div class="sidebar-card d-none d-lg-flex">
                    <img class="sidebar-card-illustration mb-2" src={{ asset ("img/logo.png") }} alt="...">
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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   
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
                       

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(auth()->check() && auth()->user()->is_superadmin === 1)
                                <span class="mr-2 d-none d-lg-inline text-primary-600 small">  <font color="blue">SuperAdmin</font></span>
                                @endif
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                          
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="/user">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
            

        
        <!-- End of Content Wrapper -->

    
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('partials.logoutmodal')

    <!-- Bootstrap core JavaScript-->
    

    <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>
    
    <script src= "{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src= "{{ asset ('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src= "{{ asset ('js/sb-admin-2.min.js') }}"></script>

    <script type="text/javascript">
        function updateClock(){
          var now = new Date();
          var dname = now.getDay(),
              mo = now.getMonth(),
              dnum = now.getDate(),
              yr = now.getFullYear(),
              hou = now.getHours(),
              min = now.getMinutes(),
              sec = now.getSeconds(),
              pe = "AM";
    
              if(hou >= 12){
                pe = "PM";
              }
              if(hou == 0){
                hou = 12;
              }
              if(hou > 12){
                hou = hou - 12;
              }
    
              Number.prototype.pad = function(digits){
                for(var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
              }
    
              var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
              var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
              var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
              var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
              for(var i = 0; i < ids.length; i++)
              document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }
    
        function initClock(){
          updateClock();
          window.setInterval("updateClock()", 1);
        }
    </script>
    

    <!-- Page level plugins -->
    {{-- <script src= "{{ asset ('"vendor/chart.js/Chart.min.js"') }}"></script>

    <!-- Page level custom scripts -->
    <script src= "{{ asset ('js/demo/chart-area-demo.js') }}"></script>
    <script src= "{{ asset ('js/demo/chart-pie-demo.js') }}"></script> --}}
    
</body>

</html> 