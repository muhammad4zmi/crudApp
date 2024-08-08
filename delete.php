<?php
include "connection.php";
$nim = $_GET['nim'];
$queryDelete = mysqli_query($koneksi, "DELETE FROM tbl_mahasiswa WHERE nim='$nim'");
if ($queryDelete) {
    echo "<script>alert('Data berhasil dihapus!');</script>";
}
header("location:index.php");
