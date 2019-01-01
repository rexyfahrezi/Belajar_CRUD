<?php
include 'koneksi.php';

$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$Jurusan = $_POST['Jurusan'];
$Telp = $_POST['Telp'];
$Alamat = $_POST['Alamat'];

$query = mysqli_query($conn, "INSERT INTO tb_mahasiswa (ID, NPM, Nama, Jurusan, Telp, Alamat) VALUES (0, '$NPM', '$Nama', '$Jurusan', '$Telp', '$Alamat')") or die(mysqli_error($conn));

if($query){
    echo "<script>alert('Data Berhasil Ditambahkan');
        window.location='index.php';</script>";
}else {
    echo "<script>alert('Data Gagal Ditambahkan!');</script>";
}
?>