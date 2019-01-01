<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE id = '$id' ") or die (mysqli_query($conn));
if($query){
    echo "<script>alert('Data Berhasil Dihapus');
        window.location='index.php';</script>";
}else {
    echo "<script>alert('Data Gagal Dihapus!');</script>";
}
?>