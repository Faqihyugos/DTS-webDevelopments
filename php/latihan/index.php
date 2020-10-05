<!DOCTYPE html>
<!-- Buatlah Sebuah Form Biodata  Sederhana (Nama, Alamat, Tempat Lahir, Jenis Kelamin, dan Usia)
    menggunakan file PHP dengan beberapa komponen seperti button, ukuran font, dll.
    Setelah mengisi semua formulir maka data akan ditampilkan di layar.
    Gunakanlah bootstrap untuk mempercantik tampilan dan validasi setiap inputnya. -->
<head>
    <title>Biodata</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container p-5">
        <h1 class="text-center">Biodata</h1>
        <br>
        <form action="save.php" method="POST">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Anda " required />
            </div>
            <div class="form-group">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat" placeholder="Masukkan Tempat Lahir " required />
            </div>
            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="text" class="form-control" name="usia" placeholder="Masukkan Usia " required />
            </div>
            <div class="form-group">
                <label for="kelamin">Kelamin</label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pilihan" id="laki" value="laki-laki" required >
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pilihan" id="perempuan" value="perempuan" required >
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat " rows  ="3" required></textarea>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset Data</button>
        </form>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>