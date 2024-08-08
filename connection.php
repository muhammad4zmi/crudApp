<?php
function koneksi()
{
}
//isiasi variable
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_mahasiswa";

//koneksi ke database
// Membuat koneksi
$koneksi = new mysqli($hostname, $username, $password, $database);

// Mengecek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
