<?php
//memanggil kode koneksi
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <br>
    <a href="formadd.php"><button type="button">[+] Tambah Data</button></a>
    <br>
    <br>
    <table border='1' cellpadding='10'>
        <tbody>
            <tr>

                <th>Nim</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
            <?php
            //memasukkan perintah Query SQL untuk menampilkan data
            $dtmahasiswa = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa");
            foreach ($dtmahasiswa as $row) :
            ?>
                <tr>

                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama_mahasiswa']; ?></td>
                    <td><?= $row['jenis_kelamin']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td>
                        <a href="formupdate.php?nim=<?= $row['nim']; ?>">Edit</a>
                        <a href="delete.php?nim=<?= $row['nim']; ?>" onclick="return confirm('Yakin Delete Data?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>