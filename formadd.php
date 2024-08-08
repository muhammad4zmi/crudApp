<form action="" method="post">
    <fieldset>
        <legend>
            <h1>Form Tambah Data</h1>
        </legend>
        <label for="">NIM : </label>
        <input type="text" name="nim">
        <br>
        <label for="">Nama Mahasiswa : </label>
        <input type="text" name="nama">
        <br>
        <label for="">Jenis Kelamin : </label>
        <select name="jk" id="">
            <option value="L">L</option>
            <option value="P">P</option>
        </select>
        <br>
        <label for="">Alamat : </label>
        <textarea name="alamat" id=""></textarea>
        <br>
        <label for="">Prodi : </label>
        <input type="text" name="prodi">
        <br>
        <br>
        <button type="submit">Simpan Data</button>
        <a href="index.php">Kembali</a>
    </fieldset>

</form>

<?php
error_reporting(0);
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];

//inisiasi file koneksi database
include "connection.php";
$queryInsert = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa VALUES('$nim','$nama','$jk','$alamat','$prodi')");
//cek
if ($queryInsert) {
    echo "<script>alert('Data berhasil ditambahkan!');</script>";
}
?>