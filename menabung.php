<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menabung</title>
</head>
<body>
    <form action="Menabung.php" method="get">
          <label for="">Nama Penabung</label>
          <input type="text" name="nama" value="">

          <label for="">Bulan Pertama</label>
          <input type="text" name="bulan_pertama" value="">

          <label for="">Bulan Kedua</label>
          <input type="text" name="bulan_kedua" value="">

          <label for="">Bulan ketiga</label>
          <input type="text" name="bulan_ketiga" value="">

          <input type="submit" value="simpan" name="simpan">
    </form>
    <?php
        $nama = $_GET["nama"];
        $bulan_pertama = $_GET["bulan_pertama"];
        $bulan_kedua= $_GET["bulan_kedua"];
        $bulan_ketiga = $_GET["bulan_ketiga"];
        $simpan = $_GET["simpan"];
        $total_tabungan= $bulan_pertama + $bulan_kedua + $bulan_ketiga;

        if(isset($_GET['nama']) 
        AND isset($_GET['bulan_pertama'])
        AND isset($_GET['bulan_kedua'])
        AND isset($_GET['bulan_ketiga'])){

        }else{
            echo "diisi dlo bang";
        }

        echo $nama;
        echo "<br>";
        echo $bulan_pertama;
        echo "<br>";
        echo $bulan_kedua;
        echo "<br>";
        echo $bulan_ketiga;

    ?>
    <p>Nama : <?php echo $nama?></p>
    <p>Bulan Pertama : <?php echo $bulan_pertama?></p>
    <p>Bulan Kedua : <?php echo $bulan_kedua?></p>
    <p>Bulan Ketiga : <?php echo $bulan_ketiga?></p>
    <p>Total Tabungan: <?php echo $total_tabungan?></p>
</body>
</html>