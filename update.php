<?php
//update data
//error_reporting(0);
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];

// //inisiasi file koneksi database
include "connection.php";
$queryUpdate = mysqli_query($koneksi, "UPDATE tbl_mahasiswa SET nama_mahasiswa='$nama', jenis_kelamin='$jk', alamat='$alamat', prodi='$prodi' WHERE nim='$nim'");
//cek
if ($queryUpdate) {
    echo "<script>alert('Data berhasil diupdate!');</script>";
}
header("location:index.php");
