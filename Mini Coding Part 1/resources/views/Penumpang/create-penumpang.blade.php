<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Tambah Penumpang</title>

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

                        <!-- <div class="modal-content">
                <div class="modal-header"> -->
                        <!-- Basic Layout -->
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Tambah Data Penumpang</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route ('store-penumpang')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="from-group">
                                                <label class="form-label" for="basic-default-fullname">ID</label>
                                                <input type="text"  id="id" name="id" class="form-control" placeholder="ID01" />
                                            </div>
                                            <div class="from-group">
                                                <label class="form-label" for="basic-default-fullname">Nama Penumpang</label>
                                                <input type="text"  id="namaPenumpang" name="namaPenumpang" class="form-control" placeholder="Alie Wafa" />
                                            </div>
                                            <div class="from-group">
                                                <label class="form-label" for="basic-default-fullname">Alamat</label>
                                                <input type="text"  id="alamat" name="alamat" class="form-control" placeholder="Kota/Kabupaten" />
                                            </div>
                                            
                                            <div class="from-group">
                                                <label class="form-label" for="basic-default-fullname">Jenis Kelamin</label>
                                                <input type="text"  id="jenisKelamin" name="jenisKelamin" class="form-control" placeholder="Laki-Laki" />
                                            </div>
                                            <div class="from-group">
                                                <label class="form-label" for="basic-default-fullname">No Telepon</label>
                                                <input type="text"  id="noTlp" name="noTlp" class="form-control" placeholder="+6578xxxxx" />
                                            </div>
                                            <div class="from-group">
                                                <label class="form-label" for="basic-default-fullname">Status Penerbangan</label>
                                                <input type="text"  id="statusPenerbangan" name="statusPenerbangan" class="form-control" placeholder="Sukses" />
                                            </div>
                                            <!-- <div class="mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select> -->
                                                <!-- <div class="form-text">You can use letters, numbers & periods</div> -->
                                            
                                            
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EndFrom Content -->

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