<?php
include "dbconnect.php";

// tambah jadwal shift
if (isset($_POST['submit'])) {
    $nama = $_POST["nama"];
    $tanggal = $_POST["tanggal"];
    $waktu = $_POST["waktu"];
    $addtotable = mysqli_query($conn, "INSERT INTO jadwalshift SET
       nama = '$nama',
       tanggal = '$tanggal',
       waktu = '$waktu'
    ");

    if ($addtotable) {
        header('location: jadwal-shift.php');
    } else {
        echo 'Gagal menambahkan jadwal shift!';
        header('location: jadwal-shift.php');
    }
    ;
}


// edit jadwal shift
if (isset($_POST['update'])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $tanggal = $_POST["tanggal"];
    $waktu = $_POST["waktu"];
    $updatedata = mysqli_query($conn, "UPDATE jadwalshift SET 
    nama='$nama', 
    tanggal='$tanggal', 
    waktu='$waktu'
    WHERE id='$id'");
    if ($updatedata) {
        echo 'Berhasil memperbarui jadwal shift!';

        header('location: jadwal-shift.php');
    } else {
        echo 'Gagal memperbarui jadwal shift!';
        header('location: jadwal-shift.php');
    }
}
;

// hapus jadwal shift
if (isset($_POST['hapus'])) {
    $id = $_POST["id"];
    $delete = mysqli_query($conn, "DELETE FROM jadwalshift WHERE id='$id'");
    //hapus juga semua data barang ini di tabel keluar-masuk

    //cek apakah berhasil
    if ($delete) {
        header('location: jadwal-shift.php');
    } else {
        echo 'Gagal menghapus jadwal shift!';
        header('location: jadwal-shift.php');
    }
}
;

// tambah jadwal vaksinasi
if (isset($_POST['submit2'])) {
    $nama = $_POST["nama"];
    $nama2 = $_POST["nama2"];
    $nama3 = $_POST["nama3"];
    $tanggal = $_POST["tanggal"];
    $waktu = $_POST["waktu"];
    $lokasi = $_POST["lokasi"];
    $jenisvaksin = $_POST["jenisvaksin"];
    $addtotable = mysqli_query($conn, "INSERT INTO jadwalvaksinasi SET
        nama='$nama', 
        nama2='$nama2', 
        nama3='$nama3', 
        tanggal='$tanggal', 
        waktu='$waktu',
        lokasi ='$lokasi',
        jenisvaksin='$jenisvaksin'
    ");

    if ($addtotable) {
        header('location: jadwal-vaksinasi.php');
    } else {
        echo 'Gagal menambahkan jadwal vaksinasi!';
        header('location: jadwal-vaksinasi.php');
    }
    ;
}


// edit jadwal vaksinasi
if (isset($_POST['update2'])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $nama2 = $_POST["nama2"];
    $nama3 = $_POST["nama3"];
    $tanggal = $_POST["tanggal"];
    $waktu = $_POST["waktu"];
    $lokasi = $_POST["lokasi"];
    $jenisvaksin = $_POST["jenisvaksin"];
    $updatedata = mysqli_query($conn, "UPDATE jadwalvaksinasi SET 
    nama='$nama', 
    nama2='$nama2', 
    nama3='$nama3', 
    tanggal='$tanggal', 
    waktu='$waktu',
    lokasi ='$lokasi',
    jenisvaksin='$jenisvaksin'
    WHERE id='$id'");
    if ($updatedata) {
        echo 'Berhasil memperbarui jadwal vaksinasi!';

        header('location: jadwal-vaksinasi.php');
    } else {
        echo 'Gagal memperbarui jadwal vaksinasi!';
        header('location: jadwal-vaksinasi.php');
    }
}
;

// hapus jadwal vaksinasi
if (isset($_POST['hapus2'])) {
    $id = $_POST["id"];
    $delete = mysqli_query($conn, "DELETE FROM jadwalvaksinasi WHERE id='$id'");
    //hapus juga semua data barang ini di tabel keluar-masuk

    //cek apakah berhasil
    if ($delete) {
        header('location: jadwal-vaksinasi.php');
    } else {
        echo 'Gagal menghapus jadwal vaksinasi!';
        header('location: jadwal-vaksinasi.php');
    }
}
;


// tambah data vaksinasi
if (isset($_POST['submit3'])) {
    $nama = $_POST["nama"];
    $jenisvaksin = $_POST["jenisvaksin"];
    $waktu = $_POST["waktu"];
    $addtotable = mysqli_query($conn, "INSERT INTO vaksinasi SET
        nama='$nama', 
        jenisvaksin='$jenisvaksin',
        waktu='$waktu' 
    ");

    if ($addtotable) {
        header('location: data-vaksinasi.php');
    } else {
        echo 'Gagal menambahkan data vaksinasi!';
        header('location: data-vaksinasi.php');
    }
    ;
}


// edit data vaksinasi
if (isset($_POST['update3'])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $jenisvaksin = $_POST["jenisvaksin"];
    $waktu = $_POST["waktu"];
    $updatedata = mysqli_query($conn, "UPDATE vaksinasi SET 
    nama='$nama', 
    jenisvaksin='$jenisvaksin',
    waktu='$waktu'
    WHERE id='$id'");
    if ($updatedata) {
        echo 'Berhasil memperbarui data vaksinasi!';

        header('location: data-vaksinasi.php');
    } else {
        echo 'Gagal memperbarui data vaksinasi!';
        header('location: data-vaksinasi.php');
    }
}
;

// hapus data vaksinasi
if (isset($_POST['hapus3'])) {
    $id = $_POST["id"];
    $delete = mysqli_query($conn, "DELETE FROM vaksinasi WHERE id='$id'");
    //hapus juga semua data barang ini di tabel keluar-masuk

    //cek apakah berhasil
    if ($delete) {
        header('location: data-vaksinasi.php');
    } else {
        echo 'Gagal menghapus data vaksinasi!';
        header('location: data-vaksinasi.php');
    }
}
;

// tambah data vaksin
if (isset($_POST['submit4'])) {
    $waktu = $_POST["waktu"];
    $jenis = $_POST["jenis"];
    $stok = $_POST["stok"];
    $addtotable = mysqli_query($conn, "INSERT INTO inventaris SET
        waktu='$waktu', 
        jenis='$jenis',
        stok='$stok' 
    ");

    if ($addtotable) {
        header('location: inventaris.php');
    } else {
        echo 'Gagal menambahkan data vaksin!';
        header('location: inventaris.php');
    }
    ;
}


// edit data vaksin
if (isset($_POST['update4'])) {
    $id = $_POST["id"];
    $waktu = $_POST["waktu"];
    $jenis = $_POST["jenis"];
    $stok = $_POST["stok"];
    $updatedata = mysqli_query($conn, "UPDATE inventaris SET 
    waktu='$waktu', 
    jenis='$jenis',
    stok='$stok'
    WHERE id='$id'");
    if ($updatedata) {
        echo 'Berhasil memperbarui data vaksin!';

        header('location: inventaris.php');
    } else {
        echo 'Gagal memperbarui data vaksin!';
        header('location: inventaris.php');
    }
}
;

// hapus data vaksin
if (isset($_POST['hapus4'])) {
    $id = $_POST["id"];
    $delete = mysqli_query($conn, "DELETE FROM inventaris WHERE id='$id'");
    //hapus juga semua data barang ini di tabel keluar-masuk

    //cek apakah berhasil
    if ($delete) {
        header('location: inventaris.php');
    } else {
        echo 'Gagal menghapus data vaksinasi!';
        header('location: inventaris.php');
    }
}
;

// tambah data petugas
if (isset($_POST['submit5'])) {
    $id = $_POST["ID"];
    $Nama = $_POST["Nama"];
    $Jabatan = $_POST["Jabatan"];
    $Kontak = $_POST["Kontak"];
    $addtotable = mysqli_query($conn, "INSERT INTO petugas SET
        ID='$id', 
        Nama='$Nama',
        Jabatan='$Jabatan',
        Kontak='$Kontak'  
    ");

    if ($addtotable) {
        header('location: petugas.php');
    } else {
        echo 'Gagal menambahkan data petugas!';
        header('location: petugas.php');
    }
    ;
}


// edit data vaksin
if (isset($_POST['update5'])) {
    $id = $_POST["ID"];
    $Nama = $_POST["Nama"];
    $Jabatan = $_POST["Jabatan"];
    $Kontak = $_POST["Kontak"];
    $updatedata = mysqli_query($conn, "UPDATE petugas SET 
        ID='$id', 
        Nama='$Nama',
        Jabatan='$Jabatan',
        Kontak='$Kontak'
    WHERE ID='$id'");
    if ($updatedata) {
        echo 'Berhasil memperbarui data petugas!';

        header('location: petugas.php');
    } else {
        echo 'Gagal memperbarui data petugas!';
        header('location: petugas.php');
    }
}
;

// hapus data vaksin
if (isset($_POST['hapus5'])) {
    $id = $_POST["ID"];
    $delete = mysqli_query($conn, "DELETE FROM petugas WHERE ID='$id'");
    //hapus juga semua data barang ini di tabel keluar-masuk

    //cek apakah berhasil
    if ($delete) {
        header('location: petugas.php');
    } else {
        echo 'Gagal menghapus data petugas!';
        header('location: petugas.php');
    }
}
;
?>