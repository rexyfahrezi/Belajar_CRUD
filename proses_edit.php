<?php
include 'koneksi.php';

$id = $_POST['id'];
$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$Jurusan = $_POST['Jurusan'];
$Telp = $_POST['Telp'];
$Alamat = $_POST['Alamat'];

$query = mysqli_query($conn, "UPDATE tb_mahasiswa SET NPM= '$NPM', Nama= '$Nama', Jurusan= '$Jurusan', Telp= '$Telp', Alamat= '$Alamat' where id = '$id' ")
or die(mysqli_error($conn));

if($query){
    echo "<script>alert('Data Berhasil Ditambahkan');
        window.location='index.php';</script>";
}else {
    echo "<script>alert('Data Gagal Ditambahkan!');</script>";
}
?>