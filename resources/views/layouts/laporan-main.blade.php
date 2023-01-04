<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.laporan-head')
</head>

<body id="page-top" onload="initClock()">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            @include('partials.topbar')
            <!-- End of Topbar -->

            <!-- Main Content -->
            <div id="content">
                @yield('content')
            </div>

        <!-- End of Content Wrapper -->
    
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('partials.logoutmodal')

    <!-- Bootstrap core JavaScript-->
    
    @include('partials.javascripts')
    
</body>

</html> 