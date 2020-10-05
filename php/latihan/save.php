<!DOCTYPE html>
<head>
    <title>Biodata</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $nama = $_POST['nama'];
        $templahir = $_POST['tempat'];
        $usia = $_POST['usia'];
        $jeniskel = $_POST['pilihan'];
        $alamat = $_POST['alamat'];
    ?>

    <div class="container p-5">
        <table class="table">
            <thead>
                <tr>
                    <h1>Biodata</h1>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $nama ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo $templahir ?></td>
                </tr>
                <tr>
                    <td>Usia atau Umur</td>
                    <td>:</td>
                    <td><?php echo $usia ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $jeniskel ?></td>
                </tr>
                <tr>
                    <td>Alamat Rumah</td>
                    <td>:</td>
                    <td><?php echo $alamat ?></td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="index.php" role="button">Kembali</a>
    </div>
  
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>