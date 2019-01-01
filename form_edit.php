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
        <br><h4><center>Form Edit Data</center></h4>
        <a class = "btn btn-info" href="index.php">Back</a>

        <form action="proses_edit.php" method="post"><br>
            <?php
                include 'koneksi.php';
                $id = $_GET['id'];

                $query = mysqli_query($conn, "SELECT * FROM tb_mahasiswa where id = '$id'")
                or die(mysqli_error($conn));
                $data = mysqli_fetch_array($query);
            ?>
            <div class="form-group">
                <label for="NPM">NPM</label>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" class="form-control" id="NPM" name="NPM" value="<?php echo $data['NPM'] ?>">
            </div>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $data['Nama'] ?>">
            </div>
            <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <input type="text" class="form-control" id="Jurusan" name="Jurusan" value="<?php echo $data['Jurusan'] ?>">
            </div>
            <div class="form-group">
                <label for="Telp">No. Telpon</label>
                <input type="text" class="form-control" id="Telp" name="Telp" value="<?php echo $data['Telp'] ?>">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?php echo $data['Alamat'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>
</html>