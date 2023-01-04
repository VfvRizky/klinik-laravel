<script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>
    
<script src= "{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src= "{{ asset ('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src= "{{ asset ('js/sb-admin-2.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js   "></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


@stack('scripts')



<script>
    $(document).ready(function() {
        // $.ajax({
        //     url: "/totalpengunjung",
        //     type: "get",
        //     success: function(response) {
        //         var yValues = [response.senin, response.selasa, response.rabu, response.kamis,
        //             response.jumat, response.sabtu, response.minggu
        //         ];
        //         var xValues = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
        //         var barColors = [
        //             "rgba(66, 135, 245)",
        //             "rgba(114, 245, 66)",
        //             "rgba(245, 218, 66)",
        //             "rgba(245, 66, 66)",
        //             "rgba(175, 64, 255)",
        //             "rgba(12, 44, 64)",
        //             "rgba(97, 102, 58)"
        //         ];

        //         new Chart("myChart", {
        //             type: "bar",
        //             data: {
        //                 labels: xValues,
        //                 datasets: [{
        //                     backgroundColor: barColors,
        //                     data: yValues
        //                 }]
        //             },
        //             options: {
        //                 legend: {
        //                     display: false
        //                 },
        //                 title: {
        //                     display: true,
        //                     text: "Jumlah Pengunjung Mingguan"
        //                 }
        //             }
        //         });
        //     }
        // });

    //     $.ajax({
    //         url: "/piechart",
    //         type: 'get',
    //         success: function(response){
    //             var xValues = ["Laki-Laki", "Perempuan", "Asuransi", "Umum"];
    //             var yValues = [response.laki, response.perempuan, response.asuransi, response.umum];
    //             var barColors = [
    //                 "#b91d47",
    //                 "#00aba9",
    //                 "#2b5797",
    //                 "#e8c3b9",
    //                 "#1e7145"
    //             ];

    //             new Chart("myPie", {
    //                 type: "pie",
    //                 data: {
    //                     labels: xValues,
    //                     datasets: [{
    //                         backgroundColor: barColors,
    //                         data: yValues
    //                     }]
    //                 },
    //                 options: {
    //                     title: {
    //                         display: true,
    //                         text: "Klasifikasi Pasien"
    //                     }
    //                 }
    //             });
    //         }
    //     });
    // });


    $.ajax({
            url: "/piechart",
            type: 'get',
            success: function(response){
                var xValues = ["Laki-Laki", "Perempuan"];
                var yValues = [response.laki, response.perempuan];
                var barColors = [
                    "#00aba9",
                    "#b91d47"
                 
                ];

                new Chart("myPie", {
                    type: "pie",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "Klasifikasi Pasien Berdasarkan Gender"
                        }
                    }
                });
            }
        });
    });



     $.ajax({
            url: "/piechart",
            type: "get",
            success: function(response) {
                var yValues = [response.asuransi, response.umum];
                var xValues = ["Asuransi", "Umum"];
                var barColors = [
                    "rgba(66, 135, 245)",
                    "rgba(114, 245, 66)"
                    
                ];

                new Chart("myChart", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "Klasifikasi Berdasarkan Penggunaan Layanan"
                        }
                    }
                });
            }
        });

    
</script>