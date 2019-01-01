<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <br>
    <h2><center>Data Mahasiswa</center></h2>
    <br>
    <div class="container">
        <a class = "btn btn-success" href="form_tambah.php">+ Tambah Data Baru</a>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Telpon</th>
                <th>Alamat</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM tb_mahasiswa") or die (mysqli_error($conn));
                $nomor = 1;
                while($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['NPM'] ?></td>
                    <td><?php echo $data['Nama'] ?></td>
                    <td><?php echo $data['Jurusan'] ?></td>
                    <td><?php echo $data['Telp'] ?></td>
                    <td><?php echo $data['Alamat'] ?></td>
                    <td colspan=2>
                        <a href="form_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary"> Edit </a>
                        <a href="proses_hapus.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" 
                        onclick="return confirm('Yakin untuk menghapus data?')"> Hapus </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>