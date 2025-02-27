<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Data Pemesanan</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset ('style/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset ('style/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset ('style/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset ('style/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset ('style/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset ('style/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset ('style/assets/js/config.js')}}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('sidebar')

            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <!-- Striped Rows -->
                        <div class="card">
                            <h5 class="card-header">Daftar Pemesanan</h5>
                            <div class="table-responsive text-nowrap">
                                <button type="button" class="btn btn-success">Tambah Data</button>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th><b>ID Pesan</b></th>
                                            <th><b>ID Pesawat</b></th>
                                            <th><b>ID Harga</b></th>
                                            <th><b>Jam Keberangkatan</b></th>
                                            <th><b>Jam Kedatangan</b></th>
                                            <th><b>Bandara Awal</b></th>
                                            <th><b>Bandara Tujuan</b></th>
                                            <th><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>PSN01</td>
                                            <td>PSW01</td>
                                            <td>H01</td>
                                            <td>20.00 Wib</td>
                                            <td>22.00 Wib</td>
                                            <td>Jakarta</td>
                                            <td>Surabaya</td>
                                            <td>
                                                <button type="button" class="btn btn-secondary">Edit</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Striped Rows -->

                    </div>
                </div>
                <!-- End Content -->

            </div>
            <!-- End Content wrapper -->

        </div>
    </div>
    <!-- End Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset ('style/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset ('style/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset ('style/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset ('style/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset ('style/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset ('style/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset ('style/assets/js/main.js')}}"></script>
    <!-- Page JS -->
    <script src="{{asset ('style/assets/js/dashboards-analytics.js')}}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>