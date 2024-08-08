<?php
include "connection.php";
//menangkap data yang akan di update dengan method GET
$nim = $_GET['nim'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE nim=$nim");
foreach ($query as $row) {
    $nim = $row['nim'];
    $nama = $row['nama_mahasiswa'];
    $jk = $row['jenis_kelamin'];
    $alamat = $row['alamat'];
    $prodi = $row['prodi'];
}
?>
<form action="update.php" method="post">
    <fieldset>
        <legend>
            <h1>Form Update Data</h1>
        </legend>
        <label for="">NIM : </label>
        <input type="text" name="nim" value="<?= $nim; ?>" readonly>
        <br>
        <label for="">Nama Mahasiswa : </label>
        <input type="text" name="nama" value="<?= $nama; ?>">
        <br>
        <label for="">Jenis Kelamin : </label>
        <select name="jk" id="">
            <option value="L">L</option>
            <option value="P">P</option>
        </select>
        <br>
        <label for="">Alamat : </label>
        <textarea name="alamat" id=""><?= $alamat; ?></textarea>
        <br>
        <label for="">Prodi : </label>
        <input type="text" name="prodi" value="<?= $prodi; ?>">
        <br>
        <br>
        <button type="submit">Update Data</button>
        <a href="index.php">Kembali</a>
    </fieldset>
</form>