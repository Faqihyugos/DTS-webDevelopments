<!DOCTYPE html>
<head>
    <title>Membuat kalkulator sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Program php -->
    <?php
    function judul(){
        echo "KALKULATOR SEDERHANA";
    }

    function Tambah($nilai1, $nilai2)
    {
        $hasil = $nilai1 + $nilai2;
        return $hasil;
    }
     
    function Kali($nilai1, $nilai2)
      {
        $hasil = $nilai1 * $nilai2;
        return $hasil;
      }
     
    function Kurang($nilai1, $nilai2)
      {
        $hasil = $nilai1 - $nilai2;
        return $hasil;
      }
     
    function Bagi($nilai1, $nilai2)
      {
        $hasil = $nilai1 / $nilai2;
        return $hasil;
      }

    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch($operasi){
            case 'tambah':
                $hasil = Tambah($bil1, $bil2);
            break;
            case 'kurang':
                $hasil = Kurang($bil1, $bil2);
            break;
            case 'kali':
                $hasil = Kali($bil1, $bil2);
            break;
            case 'bagi':
                $hasil = Bagi($bil1, $bil2);
            break;
        }
    }
    ?>

    <div class="kalkulator">
        <div class="judul"><?php judul(); ?></div>
        <form action="index.php" method="post">
            <input type="text" name="bil1" class="bil" autocomplate="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplate="off" placeholder="Masukkan Bilangan Kedua">
            <select name="operasi" class="opt">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" value="Hitung" name="hitung" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	
    </div>


</body>
</html>