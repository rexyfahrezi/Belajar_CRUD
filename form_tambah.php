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
        <br><h4><center>Form Tambah Data</center></h4>
        <a class = "btn btn-info" href="index.php">Back</a>

        <form action="proses_tambah.php" method="post"><br>
            <div class="form-group">
                <label for="NPM">NPM</label>
                <input type="text" class="form-control" id="NPM" name="NPM" placeholder="Masukkan NPM">
            </div>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Masukkan Jurusan">
            </div>
            <div class="form-group">
                <label for="Telp">No. Telpon</label>
                <input type="text" class="form-control" id="Telp" name="Telp" placeholder="Masukkan Nomor Telpon">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <textarea class="form-control" id="Alamat" name="Alamat" placeholder="Masukkan Alamat Lengkap" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>
</html>