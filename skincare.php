<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skincare</title>
</head>
<body>
     <form action="skincare.php" method="post">
        <label for="">Customer</label>
        <input type="text" name="customer" value="">
        <br>
        
        <label for="">Nama Barang</label>
        <label for="">Toner</label>
        <input type="radio" name="nama_barang" value="Toner">
        <label for="">Moisturizer</label>
        <input type="radio" name="nama_barang" value="Moisturizer">
        <label for="">Serum</label>
        <input type="radio" name="nama_barang" value="Serum">
        <label for="">FaceMist</label>
        <input type="radio" name="nama_barang" value="FaceMist">
        <br>

        <label for="" name="jumlah_beli">Jumlah barang beli</label>
        <input type="text" name="jumlah_beli">
        <br>

        <input type="submit" name="simpan">
     </form>
     <?php
         $customer = $_POST["customer"];
         $nama_barang = $_POST["nama_barang"];
         $jumlah_beli = $_POST["jumlah_beli"];
         $simpan = $_POST["simpan"];

         echo $customer;
         echo $nama_barang;
         echo $jumlah_beli;  
    ?>
    <p>Customer : <?= $customer?></p>
    <p>Nama Barang : <?= $nama_barang?></p>
    <p>Jumlah beli : <?= $jumlah_beli?></p>
</body>
</html>