<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- import bootstrap  -->
    <title>Data Vaksinasi Balita</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon-logo.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <!-- <h1 class="logo me-auto"><a href="index.html">PHProLabs</a></h1> -->
            <a href="index.html" class="logo me-auto">SIVALITA</a>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="jadwal.html">Jadwal</a></li>
                    <li><a href="vaksinasi.html">Data Vaksinasi</a></li>
                    <li><a href="petugas.html">Petugas Medis</a></li>
                    <li><a href="inventaris.html">Inventaris</a></li>
                    <li><a href="profil.html"><img src="profil.png" width="25" height="25"></img></a></li>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <div id="main" data-bs-aos="fade-in">
        <!-- breadcrumbs -->

        <div class="breadcrumbs">
            <div class="container">
                <h2>Data Vaksinasi Balita</h2>
                <p> </p>
            </div>
        </div>
        <br><br>
        <!-- breadcrumbs -->
        <div class="container" data-bs-aos="fade-up">
            <div style="text-align: center"><input id="myInput" onkeyup="myFunction()"
                    style="width:600px; padding: 10px 15px; border-radius: 10px" id="search"
                    placeholder="Cari data vaksinasi.."></input></div>
            <br><br>
            <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                style="background-color: #3FBBC0; border-style: none; border-radius: 10px; padding: 10px 15px;color: white">Tambah
                Data</a><br><br>
            <br>
            <!-- tabel -->
            <table id="myTable" style="width:100%;">
                <thead class=" thead-dark">

                    <tr>
                        <th style="width:5%">No.</th>
                        <th style="width:20%">Nama Anak</th>
                        <th style="width:30%">Jenis Vaksin</th>
                        <th style="width:30%">Waktu</th>
                        <th style="width:20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // membuat koneksi ke database 
                    include "dbconnect.php";

                    //membuat variabel angka
                    $no = 1;

                    //mengambil data dari tabel barang
                    $vaksinasi = mysqli_query($conn, "select * from vaksinasi ORDER BY waktu");

                    //melooping(perulangan) dengan menggunakan while
                    while ($data = mysqli_fetch_array($vaksinasi)) {
                        $id = $data['id'];

                        ?>
                        <tr>

                            <!-- menampilkan data dengan menggunakan array  -->
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $data['nama']; ?>
                            </td>
                            <td>
                                <?php echo $data['jenisvaksin']; ?>
                            </td>
                            <td>
                                <?php echo $data['waktu']; ?>
                            </td>
                            <td>

                                <!-- membuat tombol dengan ukuran small berwarna biru  -->
                                <!-- data-target setiap modal harus berbeda, karena akan menampilkan data yang berbeda pula
                                            caranya membedakannya, gunakan id_barang sebagai pembeda data-target di setiap modal -->
                                <a href="" class="btn btn-sm btn-warning" data-toggle="modal"
                                    data-target="#edit<?php echo $data['id']; ?>" style="color:white">Edit</a>
                                <a href="" class="btn btn-sm btn-danger" data-toggle="modal"
                                    data-target="#hapus<?php echo $data['id']; ?>">Hapus</a>
                            </td>
                        </tr>

                        <!-- untuk melihat bentuk-bentuk modal kalian bisa mengunjungi laman bootstrap dan cari modal di kotak pencariannya -->
                        <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
                        <!-- modal edit -->
                        <div class="modal fade" id="edit<?php echo $data['id']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Vaksinasi</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal"></button>
                                        </button>
                                    </div>
                                    <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                        data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                                    <div>
                                        <div class="modal-body">
                                            <form action="function.php" method="post">
                                                <div class="form-group">
                                                    <label>Nama Anak</label>
                                                    <input name="nama" type="text" class="form-control"
                                                        placeholder="Nama Anak" value="<?php echo $data['nama']; ?>">
                                                </div><br>
                                                <div class="form-group">
                                                    <label>Jenis Vaksin</label>
                                                    <input name="jenisvaksin" type="text" class="form-control"
                                                        value="<?php echo $data['jenisvaksin']; ?>">
                                                </div><br>
                                                <div class="form-group">
                                                    <label>Waktu</label>
                                                    <input name="waktu" type="date" class="form-control"
                                                        value="<?php echo $data['waktu']; ?>">
                                                </div><br>
                                                <input type="hidden" name="id" value="<?= $id; ?>">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Batal</button>
                                            <input type="submit" name="update3" class="btn"
                                                style="background-color: #3FBBC0; color: white;" value="Simpan">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--modal edit -->
                        <!-- modal hapus -->
                        <div class="modal fade" id="hapus<?php echo $data['id']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post" action="function.php">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Vaksinasi</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"></button>
                                            </button>
                                        </div>
                                        <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                        data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data vaksinasi ini?
                                            <input type="hidden" name="id" value="<?= $id; ?>">
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger" name="hapus3">Hapus</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal hapus -->
                    <?php } ?>
                </tbody>
            </table>

            <style>
                table,
                th,
                td {
                    border: 1px solid;
                    table-layout: auto;
                    width: 500px;
                    padding: 2px 2px;
                    text-align: center;
                }
            </style>
        </div>
    </div><br><br><br>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>SIVALITA</h3>
                        <p>
                            Malang, 2023<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +62 8888 8888 12<br>
                            <strong>Email:</strong> sivalita@gmail.com<br>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="jadwal.html">Jadwal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="vaksinasi.html">Data Vaksinasi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="petugas.html">Petugas Medis</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="inventaris.html">Inventaris</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>SIVALITA</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Modal Add -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Vaksinasi</h4>
                    <button type="button" class="btn-close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="function.php" method="post">
                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama Anak Balita" value=""
                                required>
                        </div><br>
                        <div class="form-group">
                            <label>Jenis Vaksin</label>
                            <input name="jenisvaksin" type="text" class="form-control" placeholder="Jenis Vaksin"
                                required>
                        </div><br>
                        <div class="form-group">
                            <label>Waktu</label>
                            <input name="waktu" type="date" class="form-control" required>
                        </div><br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <input type="submit" name="submit3" class="btn" style="background-color: #3FBBC0; color: white;"
                        value="Simpan">
                </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    <!-- Modal Add -->
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- Start datatable js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
</body>

</html>